<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produits;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
USE Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Order;

class AccueilController extends Controller


{
    public function index(){
        $produits = produits::where('offres','1')->paginate(5);
        
        return view("Accueil")->with([
            'produits' => $produits
        ]);
    }
    
    public function login(){
        return view('login');
    }

    public function register(){
        return view("register");
    }

    
    public function produits($type){
        $produits = Produits::where('type',$type)->paginate(20);
        
        // if(Auth::check()){
            // $user_id = Auth::user()->id;
            // $favorite = favorite::where("id_user",$user_id)->get();
        // }
        
        return view("produits")->with([
            "produits" => $produits,
            "type" => $type,
            // "favorite" => $favorite
        ]);
    }

    public function view_pro($id){
        $produit = Produits::where('id',$id)->first();
        return view("view_pro")->with([
            "produit" => $produit
        ]);
    }

    public function management(){
        $produits = Produits::paginate(10);
        return view("management_produit")->with([
            'produits' => $produits
        ]);
    }
    

    public function search_by_name(){
        if(Auth::check()) {
            if(Auth::user()->type_user === 'admin') {

        $search_name = $_GET['name_product'];
        if($search_name === ''){
            $produits = Produits::latest()->paginate(10);
            return view("management_produit")->with([
                'produits' => $produits
            ]);
        }
        else{
            $produits = Produits::where('title',"LIKE","%".$search_name."%")->get();
            return view('search_by_name')->with([
                'produits' => $produits
            ]);

        }
    }}  
       
    }

    public function search_by_type(){

        if(Auth::check()) {
            if(Auth::user()->type_user === 'admin') {
        $search_type = $_GET['type_product'];
        if($search_type === ''){
            $produits = Produits::latest()->paginate(10);
            return view("management_produit")->with([
                'produits' => $produits
            ]);
        }
        else{
            $produits = Produits::where('type',"LIKE","%".$search_type."%")->get();
            return view('search_by_type')->with([
                'produits' => $produits
            ]);

        }
            
    }}
       
    }


    public function create(){

        if(Auth::check()) {
            if(Auth::user()->type_user === 'admin') {
                return view("create_product");

            }else {
                return redirect('/');
            }
        }
    }

    public function dashboard(){
        // $users = user::where('type_user','user')->paginate(6);
        // $users = user::select('day('.'created_at'.')')->get();
        $users = DB::table('users')->latest()->select(DB::raw('month(created_at) as month'),DB::raw('day(created_at) as day'),'name')->where('type_user','user')->limit(6)->get();
        $produits = produits::latest()->limit(5)->get();
        $membres = DB::table('users')->count();

        return view('dashboard')->with([
            "membres" => $membres,
            "users" => $users,
            "produits" => $produits
        ]);
    }

    public function sent(Request $request){
        if(Auth::check()) {
            if(Auth::user()->type_user === 'admin') {
        $produits = new Produits();


        

        

        if($request->has('image')){
            $file = $request->image;
            $image = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'),$image);

        };

            $produits->title = $request->name;
            $produits->slug = Str::slug($produits->title);
            $produits->prix = $request->prix;
            $produits['old-prix'] = $request->old_prix;
            $produits->type = $request->type;
            $produits->image = $image;
            $produits->quantité = $request->quantité;
            $produits->description = $request->description;
            $produits->offres = $request->offre;
            $color = implode("/",$request->color);
            $produits->color = $color;

            $produits->save();

        return redirect()->route('management_produit')->with([
            "success" => "Produit Create Success"

        ]);

    }else {
        return redirect('/');
    
    }}
    }

    public function edit($id){
             if(Auth::check()) {
            if(Auth::user()->type_user === 'admin') {
        $produit = Produits::find($id);

        return view('edit_product')->with([
            'produit' => $produit
        ]);
    }else {
        return redirect('/');
    }}
    }

    public function update(Request $request,$id){
        if(Auth::check()) {
            if(Auth::user()->type_user === 'admin') {
        $produit = Produits::where('id',$id)->first();

        if($request->has('image')){
             $file = $request->image;
             $image = time() ."_". $file->getClientOriginalName();
             $file->move(public_path('uploads'),$image);
             
             if(file_exists(public_path('uploads/').$produit->image)){
                unlink(public_path('uploads/').$produit->image);
             }

             $produit->image = $image;
        }

        $produit->update([
            "title" => $request->name,
            "slug" => Str::slug($produit->title),
            "prix" => $request->prix,
            "old-prix" => $request["old_prix"],
            "type" => $request->type,
            "image" => $produit->image,
            "quantité" => $request->quantité,
            "offres" => $request->offre,
            "description" => $request->description
        ]);

        return redirect()->route('management_produit')->with([
            'success' => "Updating Success"
        ]);
    }else {
        return redirect('/');
    }}

        
    }

    public function delete($id){
        if(Auth::check()) {
            if(Auth::user()->type_user === 'admin') {
        $produit = Produits::find($id);

        if(file_exists(public_path('uploads/').$produit->image)){
            unlink(public_path('uploads/').$produit->image);
        }

        $produit->delete();

        return redirect()->route('management_produit')->with([
            'success' => 'Deleting Success'
        ]);
    }else {
        return redirect('/');
    }}
        
    }
    
    public function orders(){
        if(Auth::check()) {
            if(Auth::user()->type_user === 'admin') {
                $orders = Order::latest()->get();
                return view('orders')->with([
                    "orders" => $orders 
                ]);
            }else {
                return redirect('/');
            }
        }

    }
   
    public function users(){

        if(Auth::check()) {
            if(Auth::user()->type_user === 'admin') {
        // $users = user::latest()->paginate(10);
        $users = user::select('*')
                 ->whereNotNull('last_seen')
                 ->orderBy('last_seen','DESC')
                 ->get();


        $count_users = DB::table('users')->count();

        
        
        return view('users')->with([
            "users" => $users,
            "count_users" => count($users)
        ]);
    }else {
        return redirect('/');
        }}
    }








    public function search_user(){
        if(Auth::check()) {
            if(Auth::user()->type_user === 'admin') {

            $user_id = $_GET['id_user'];
        if($user_id === ''){
            $users = user::latest()->paginate(50);
            return view("users")->with([
                'users' => $users
            ]);
        }
        else{
            
            $user = user::where('id',$user_id)->get();
            // $user = DB::table('users')->where('id',$user_id)->get();
            return view('search_for_user')->with([
                'user' => $user
            ]);

        }
     }}  
       
    }


    public function dash_user(){
        

        return view('dash_user');
    }

    public function orders_user(){
        if(Auth::check()) {
            if(Auth::user()->type_user === 'user') {
                $orders = Order::where("user_id",Auth::user()->id)->get();

                
                return view('orders_user')->with([
                    "orders" => $orders ,
                    "count_orders" => count($orders)
                ]);
            }else {
                return redirect('/');
            }
        }

        }

    

}
