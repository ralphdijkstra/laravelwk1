<?php

namespace App\Http\Controllers;

use App\Models\Pops;
use App\Models\Series;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class PopsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pops = Pops::orderBy("pop_number", "desc")->get();
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
        $series = Series::all();
        foreach ($series as $serie) {
            if ($serie->name == $request->input('series')) {
                $selectedSerieYear = $serie->year;
                $selectedSerieSort = $serie->id;
                $selectedSeriePhase = $serie->phase;
            }
        }
        if (empty($request->input('variant'))) {
            $image = $request->input('pop_number') . " " . $request->input('pop_name') . ".jpg";
        } else {
            $image = $request->input('pop_number') . " " . $request->input('pop_name') . " " . $request->input('variant') . ".jpg";
        }
        $pop = Pops::create([
            'pop_number' => $request->input('pop_number'),
            'pop_name' => $request->input('pop_name'),
            'variant' => $request->input('variant'),
            'category' => $request->input('category'),
            'series' => $request->input('series'),
            'exclusive' => $request->input('exclusive'),
            'limited' => $request->input('limited'),
            'sort' => $selectedSerieSort,
            'year' => $selectedSerieYear,
            'phase' => $selectedSeriePhase,
            'image' => $image
        ]);
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
    public function edit($id)
    {
        $series = Series::all();
        $pop = Pops::where('pop_id', $id)->first();
        return view('pops.edit', ['id' => $id, 'pop' => $pop, 'series' => $series]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pops  $pops
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $series = Series::all();
        foreach ($series as $serie) {
            if($serie->name == $request->input('series')) {
                $selectedSerieYear = $serie->year;
                $selectedSerieSort = $serie->id;
                $selectedSeriePhase = $serie->phase;
            }
        }
        if(empty($request->input('variant'))){
            $image = $request->input('pop_number') . " " . $request->input('pop_name') . ".jpg";
        }
        else {
            $image = $request->input('pop_number') . " " . $request->input('pop_name') . " " . $request->input('variant') . ".jpg";
        }
        $pops = Pops::where('pop_id', $id)->first();
        $pops->pop_number = $request->input('pop_number');
        $pops->pop_name = $request->input('pop_name');
        $pops->variant = $request->input('variant');
        $pops->category = $request->input('category');
        $pops->series = $request->input('series');
        $pops->exclusive = $request->input('exclusive');
        $pops->limited = $request->input('limited');
        $pops->sort = $selectedSerieSort;
        $pops->year = $selectedSerieYear;
        $pops->phase = $selectedSeriePhase;
        $pops->image = $image;
        $pops->update();
        return redirect('/pops');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pops  $pops
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pops = Pops::where('pop_id', $id)->first();
        $pops->delete();
        return redirect('/pops');
    }
}
