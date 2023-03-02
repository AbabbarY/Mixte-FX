<?php

namespace App\Http\Controllers;

use App\Models\Produits;
use App\Http\Requests\StoreProduitsRequest;
use App\Http\Requests\UpdateProduitsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
USE Illuminate\Support\Facades\Auth;


class ProduitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function management(){
        if(Auth::check()) {
            if(Auth::user()->type_user === 'admin') {
        $produits = produits::where('offres','1')->get();
        return view("management_product_accueil")->with([
           'produits' => $produits
        ]);
    }else {
        return redirect('/');
    }}
    }

    public function search_for_product(){
        if(Auth::check()) {
            if(Auth::user()->type_user === 'admin') {
                $budget = $_GET['budget'];
                $color = $_GET['color'];
        
                if($color === "color"){
                    $type = $_GET['type'];
                    $produits = produits::where('type',$type)
                                ->where('prix','<=',$budget)
                                ->get();
                    return view('search_for_product')->with([
                        "produits" => $produits,
                        "type" => $type
                    ]);
                }else{

                $type = $_GET['type'];
                $produits = produits::where('type',$type)
                            ->where('color','like',"%".$color."%")
                            ->where('prix','<=',$budget)
                            ->get();
                return view('search_for_product')->with([
                    "produits" => $produits,
                    "type" => $type
                ]);
            }}else {
                return redirect('/');
        
    }}
    


    }

    public function create(){
        if(Auth::check()) {
            if(Auth::user()->type_user === 'admin') {
        return view("create_product_accueil");
    }else {
        return redirect('/');
            }}

    }

    public function sent(Request $request){
        if(Auth::check()) {
            if(Auth::user()->type_user === 'admin') {
        $produits = new produits();

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
            $produits->offres = $request->offre;
            $produits->quantité = $request->quantité;
            $produits->description = $request->description;
            $produits->save();

        return redirect()->route('management_product_accueil')->with([
            "success" => "Produit Create Success"
        ]);  }else {
            return redirect('/');
    }}
    }

    public function edit($id){
        if(Auth::check()) {
            if(Auth::user()->type_user === 'admin') {
        $produit = Produits::find($id);

        return view('edit_product_accueil')->with([
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
            "offres" => $request->offre,
            "quantité" => $request->quantité,
            "description" => $request->description
        ]);

        return redirect()->route('management_product_accueil')->with([
            'success' => "Updating Success"
        ]);
    }else {
        return redirect('/');

        
    }}}

    public function delete($id){
        if(Auth::check()) {
            if(Auth::user()->type_user === 'admin') {
        $produit = produits::find($id);

        if(file_exists(public_path('uploads/').$produit->image)){
            unlink(public_path('uploads/').$produit->image);
        }

        $produit->delete();

        return redirect()->route('management_product_accueil')->with([
            'success' => 'Deleting Success'
        ]);
    }else {
        return redirect('/');
    }}
        
    }

    
}
