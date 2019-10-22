<?php

namespace App\Http\Controllers;

use App\Individual;
use Illuminate\Http\Request;

class IndividualController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Individual::all();
        return view('individual.index', [
            'data' => $data
        ]);
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
     * @param  \App\Individual  $individual
     * @return \Illuminate\Http\Response
     */
    public function show(Individual $individual)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Individual  $individual
     * @return \Illuminate\Http\Response
     */
    public function edit(Individual $individual)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Individual  $individual
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Individual $individual)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Individual  $individual
     * @return \Illuminate\Http\Response
     */
    public function destroy(Individual $individual)
    {
        //
    }
}
