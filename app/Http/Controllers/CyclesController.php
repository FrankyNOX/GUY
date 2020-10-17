<?php

namespace App\Http\Controllers;

use App\Models\Cycle;
use App\Models\Filiere;
use Illuminate\Http\Request;

class CyclesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Cycle::with('filiere')->get();
        //dd($items);
        return view("Admin.Cycles.index",compact("items"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = Filiere::all();
        return view("Admin.Cycles.create",compact('items'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,Cycle::rules());
        Cycle::create($request->all());
        return redirect()->route("Cycles.index")->withSuccess("Cycles creer avec success");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $items = Filiere::all();
        $cycle =  Cycle::with("filiere")->findOrFail($id);
        return view("Admin.Cycles.edit",compact("cycle","items"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, Cycle::rules(true,$id));
        $cycle = Cycle::findOrFail($id);
        $cycle->update($request->all());
        return redirect()->route("Cycles.index")->withSuccess('Cycle modifie avec success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cycle::destroy($id);
        return redirect(route("Cycles.index"))->withSuccess("Cycle supprime avec success");
    }
}
