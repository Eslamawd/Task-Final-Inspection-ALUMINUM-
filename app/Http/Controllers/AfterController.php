<?php

namespace App\Http\Controllers;

use App\Models\After;
use Illuminate\Http\Request;

class AfterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(After $after)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(After $after)
    {
        //
        return view('after.edit', ['after' => $after]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, After $after)
    {
        //
        $after->update($request->all());
        return redirect(route('finals.show', $after->finals_id));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(After $after)
    {
        //
    }
}
