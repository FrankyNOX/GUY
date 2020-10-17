<?php

namespace App\Http\Controllers;

use App\Models\State;
use App\Models\Etablissement;
use Illuminate\Http\Request;


class EtablissementsController extends Controller
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
        $items = Etablissement::with('city','state')->get();
        return view("Admin.Etablissements.index",compact("items"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = State::where("country_id",38)->get();
        return view("Admin.Etablissements.create",compact('items'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,Etablissement::rules());
        Etablissement::create($request->all());
        return redirect()->route("Etablissements.index")->withSuccess("Etablissement creer avec success");
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
        $items = State::where("country_id",38)->get();
        $etablissement =  Etablissement::findOrFail($id);
        return view("Admin.Etablissements.edit",compact("etablissement","items"));
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
        $this->validate($request, Etablissement::rules(true,$id));
        $etablissement = Etablissement::findOrFail($id);
        $etablissement->update($request->all());
        return redirect()->route("Etablissements.index")->withSuccess('Etablissement modifie avec success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Etablissement::destroy($id);
        return redirect(route("Etablissements.index"))->withSuccess("Etablissement supprime avec success");
    }
}
