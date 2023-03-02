<?php

namespace App\Http\Controllers;

use App\Models\favorite;
use App\Http\Requests\StorefavoriteRequest;
use App\Http\Requests\UpdatefavoriteRequest;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    public function favorite($id){
        

        $favorite  = new favorite();
        $favorite->id_product = $id;
        $favorite->id_user = Auth::user()->id;
        $favorite->save();

        return redirect()->back();
    }

    public function destroy($id)
    {
        $favorite = favorite::where('id',$id)->delete();
        // $favorite->delete();
        return redirect()->back();

    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorefavoriteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorefavoriteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\favorite  $favorite
     * @return \Illuminate\Http\Response
     */
    public function show(favorite $favorite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\favorite  $favorite
     * @return \Illuminate\Http\Response
     */
    public function edit(favorite $favorite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatefavoriteRequest  $request
     * @param  \App\Models\favorite  $favorite
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatefavoriteRequest $request, favorite $favorite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\favorite  $favorite
     * @return \Illuminate\Http\Response
     */
    
}
