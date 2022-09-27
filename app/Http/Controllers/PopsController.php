<?php

namespace App\Http\Controllers;

use App\Models\Pops;
use Illuminate\Http\Request;

class PopsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pops = Pops::all();
        return view('pops.index', ['pops' => $pops]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pops  $pops
     * @return \Illuminate\Http\Response
     */
    public function show(Pops $pops)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pops  $pops
     * @return \Illuminate\Http\Response
     */
    public function edit(Pops $pops)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pops  $pops
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pops $pops)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pops  $pops
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pops $pops)
    {
        //
    }
}
