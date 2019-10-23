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
        return view('individual.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email'         => 'email:rfc|required|min:8|max:50',
            'first_name'    => 'required|min:8|max:255',
            'last_name'     => 'required|min:8|max:255'
        ]);
        $report = new Individual;
        $report->email = $request->get('email');
        $report->first_name = $request->get('first_name');
        $report->last_name = $request->get('last_name');
        $report->save();
        return redirect('personal');
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
    public function edit($individual)
    {
        $individual = Individual::find($individual);
        return view('individual.edit', [
            'data' => $individual
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Individual  $individual
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $individual)
    {
        $validatedData = $request->validate([
            'first_name'    => 'required|min:8|max:255',
            'last_name'     => 'required|min:8|max:255'
        ]);
        $report = Individual::find($individual);
        $report->first_name = $request->get('first_name');
        $report->last_name = $request->get('last_name');
        $report->save();
        return redirect('personal');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Individual  $individual
     * @return \Illuminate\Http\Response
     */
    public function destroy($individual)
    {
        $registro = Individual::find($individual);
        $registro->delete();
        return redirect('personal');
    }
}
