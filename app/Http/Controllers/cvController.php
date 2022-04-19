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
        $cv = new cv;
        $cv->name = $request->name;
        $cv->email = $request->email;
        $cv->keyprogramming = $request->keyprogramming;
        $cv->education = $request->education;
        $cv->urllinks = $request->urllinks;
        $cv->save();
        return redirect('/cvs');
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
        return view('cv.edit', ['cv' => $cv]);
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
        $cv->update([
            'name' => $request->name,
            'email' => $request->email,
            'keyprogramming' => $request->keyprogramming,
            'education' => $request->education,
            'urllinks' => $request->urllinks,
        ]);
        return redirect('/cvs/' . $cv->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cv  $cv
     * @return \Illuminate\Http\Response
     */
    public function destroy(cv $cv)
    {
        $cv->delete();
        return redirect('/cvs');
    }
}
