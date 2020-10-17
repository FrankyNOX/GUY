<?php

namespace App\Http\Controllers;

use App\Models\Niveau;
use App\Models\Option;
use App\Models\Salle;
use Illuminate\Http\Request;

class SallesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Salle::with('option')->get();
        return view("Admin.Salles.index",compact("items"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = Option::all();
        return view("Admin.Salles.create",compact('items'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,Salle::rules());
        Salle::create($request->all());
        return redirect()->route("Salles.index")->withSuccess("Niveau creer avec success");
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
        $items = Option::all();
        $salle =  Salle::with("option")->findOrFail($id);
        return view("Admin.Salles.edit",compact("salle","items"));
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
        $this->validate($request, Salle::rules(true,$id));
        $salle = Salle::findOrFail($id);
        $salle->update($request->all());
        return redirect()->route("Salles.index")->withSuccess('Salle modifie avec success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Salle::destroy($id);
        return redirect(route("Salles.index"))->withSuccess("Salle supprime avec success");
    }
}
