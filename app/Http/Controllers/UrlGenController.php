<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUrlGenRequest;
use App\Http\Requests\UpdateUrlGenRequest;
use App\Models\UrlGen;


class UrlGenController extends Controller
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
     * @param  \App\Http\Requests\StoreUrlGenRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUrlGenRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UrlGen  $urlGen
     * @return \Illuminate\Http\Response
     */
    public function show(UrlGen $urlGen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UrlGen  $urlGen
     * @return \Illuminate\Http\Response
     */
    public function edit(UrlGen $urlGen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUrlGenRequest  $request
     * @param  \App\Models\UrlGen  $urlGen
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUrlGenRequest $request, UrlGen $urlGen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UrlGen  $urlGen
     * @return \Illuminate\Http\Response
     */
    public function destroy(UrlGen $urlGen)
    {
        //
    }
}
