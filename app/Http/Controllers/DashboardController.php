<?php

namespace App\Http\Controllers;

use App\Models\ViewData;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.detail.index', [
            'detail' => ViewData::where('user_id', auth()->user()->id)->get()
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
     * @param  \App\Models\ViewData  $viewdata
     * @return \Illuminate\Http\Response
     */
    public function show(ViewData $viewdata)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Viewdata  $viewdata
     * @return \Illuminate\Http\Response
     */
    public function edit(ViewData $viewdata)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ViewData  $viewdata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ViewData $viewdata)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ViewData  $viewdata
     * @return \Illuminate\Http\Response
     */
    public function destroy(ViewData $viewdata)
    {
        //
    }
}
