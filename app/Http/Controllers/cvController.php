<?php

namespace App\Http\Controllers;

use App\Models\cv;
use Illuminate\Http\Request;

class cvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cvs = cv::all();
        return view('cv.index', ['cvs' => $cvs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cv.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newCV = cv::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'keyprogramming' => $request->input('keyprogramming'),
            'education' => $request->input('education'),
            'urllinks' => $request->input('urllinks'),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cv  $cv
     * @return \Illuminate\Http\Response
     */
    public function show(cv $cv)
    {
        return view('cv.show', ['cv' => $cv]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cv  $cv
     * @return \Illuminate\Http\Response
     */
    public function edit(cv $cv)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cv  $cv
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cv $cv)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cv  $cv
     * @return \Illuminate\Http\Response
     */
    public function destroy(cv $cv)
    {
        //
    }
}
