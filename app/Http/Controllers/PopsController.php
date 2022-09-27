<?php

namespace App\Http\Controllers;

use App\Models\Pops;
use App\Models\Series;
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
        $series = Series::all();
        return view('pops.create', ['series' => $series]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'pop_id'=>'required',
        // ]);
        $pops = new Pops;
        $pops->pop_number = $request->input('pop_number');
        $pops->pop_name = $request->input('pop_name');
        $pops->variant = $request->input('variant');
        $pops->category = $request->input('category');
        $pops->series = $request->input('series');
        $pops->exclusive = $request->input('exclusive');
        $pops->limited = $request->input('limited');
        if(empty($request->input('variant'))){
            $image = $request->input('pop_number') . " " . $request->input('pop_name') . ".jpg";
        }
        else {
            $image = $request->input('pop_number') . " " . $request->input('pop_name') . " " . $request->input('variant') . ".jpg";
        }
        $pops->image = $image;
        $pops->save();
        return redirect('/pops');
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
