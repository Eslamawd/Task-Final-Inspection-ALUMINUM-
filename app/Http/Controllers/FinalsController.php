<?php

namespace App\Http\Controllers;

use App\Models\After;
use App\Models\Before;
use App\Models\Finals;
use Illuminate\Http\Request;

class FinalsController extends Controller
{
    /**
     * Display a listing of the resource.
     */

   
    public function index()
    {
        //
        $finals = Finals::all('*');
      
        return view('finals.index',['finals'=>$finals]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('finals.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $final = Finals::create([
        'customer_name' => $request->customer_name,
        'project'=>$request->project,
        'quality_inspector' => $request->quality_inspector ,
       

        ]);
        if ($final) {
            Before::create([
                'finals_id'=> $final->id,
            ]);
            After::create([
                'finals_id'=> $final->id,
            ]);
    
            return redirect(route('finals.show', ['final' => $final ]));
        }

       
    }

    /**
     * Display the specified resource.
     */
    public function show(Finals $final)
    {
        //

        $final->load('before','after');
   
        return view('finals.show', ['final'=> $final]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Finals $finals)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Finals $finals)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Finals $final)
    {
        //
        $final->delete();
        return redirect(route('finals'));
    }
}
