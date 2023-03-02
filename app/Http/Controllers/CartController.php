<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produits;

class CartController extends Controller
{
    
    public function cart()
    {
        return view('cart');
    }

    public function addToCart($id,Request $request)
    {
        $product = Produits::findOrFail($id);
          
        $cart = session()->get('cart', []);
  
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->title,
                "quantity" => $request->quantity,
                "price" => $product->prix,
                "image" => $product->image,
                "image" => $product->image,
                'attributes' => array(
                    'color' => $request->optradio2,
                    "size" => $request->optradio,
                    "description" => $request->description,
                    // "id_product" => $request->id,
                )
            ];
        }
          
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */

    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */

    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }
}

