<?php

namespace App\Http\Controllers;

use App\Models\command;
use App\Http\Requests\StorecommandRequest;
use App\Http\Requests\UpdatecommandRequest;

class CommandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StorecommandRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecommandRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\command  $command
     * @return \Illuminate\Http\Response
     */
    public function show(command $command)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\command  $command
     * @return \Illuminate\Http\Response
     */
    public function edit(command $command)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecommandRequest  $request
     * @param  \App\Models\command  $command
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecommandRequest $request, command $command)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\command  $command
     * @return \Illuminate\Http\Response
     */
    public function destroy(command $command)
    {
        //
    }
}
