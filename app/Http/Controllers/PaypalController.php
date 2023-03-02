<?php

namespace App\Http\Controllers;


use App\Models\Order;
use Srmklive\PayPal\Services\ExpressCheckout;


use Illuminate\Http\Request;

class PaypalController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }

    public function payment(Request $request){

        
        $data = [];
 
        $data['items'] = [];

        foreach(session('cart') as $id => $details){
            array_push($data['items'],[
                'name' =>$details['name'],
                'price' => (int)($details['price'] / 10.60),
                'desc'  => $details['attributes']['description'],
                'qty' => $details['quantity']
            ]);
        }


        $data['invoice_id'] = auth()->user()->id;
 
        $data['invoice_description'] = "Order #{$data['invoice_id']} Invoice";
 
        $data['return_url'] = route('payment.success');
 
        $data['cancel_url'] = route('payment.cancel');
 
        $data['total'] = 0;

        $total = 0;
        foreach($data['items'] as $item) {
            $total += $item['price'] * $item['qty'];
        }

        $data['total'] = $total;

 
        $provider = new ExpressCheckout;
        $response = $provider->setExpressCheckout($data);
        $response = $provider->setExpressCheckout($data, true);

       
        
      

        
        return redirect($response['paypal_link']);


    }

        public function cancel(){
           return redirect()->route("cart")->with([
             "Failed" => "Failed Payment"
           ]);
        }

        public function success(Request $request){
            $provider = new ExpressCheckout;
            $response = $provider->getExpressCheckoutDetails($request->token);

            $order = new Order();

            if(in_array(strtoupper($response['ACK']),['SUCCESS','SUCCESSWITHWARNING'])){
                $cart = session()->get('cart');

                foreach(session('cart') as $id => $details){
                        $order->user_id = auth()->user()->id;
                        $order->product_name =  $details['name'];
                        $order->prix = $details['price'];
                        $order->size =  $details['attributes']['size'];
                        $order->quantite = $details['quantity'];
                        $order->total = $details['quantity'] * $details['price'];
                        $order->paid = 1;
                        $order->save();

                        if(isset($cart[$id])) {
                            unset($cart[$id]);
                            session()->put('cart', $cart);
                        }

                    };
                

                    return redirect()->route("cart")->with([
                        "Success" => "Success Payment"
                      ]); 

            
        };
}
}

