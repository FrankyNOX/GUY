<?php

namespace App\Http\Controllers;

use App\Models\Etablissement;
use App\Models\Filiere;
use Illuminate\Http\Request;

class FilieresController extends Controller
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
        $items = Filiere::with('etablissement')->get();
        return view("Admin.Filieres.index",compact("items"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = Etablissement::all();
        return view("Admin.Filieres.create",compact('items'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,Filiere::rules());
        Filiere::create($request->all());
        return redirect()->route("Filieres.index")->withSuccess("Filiere creer avec success");
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
        $items = Etablissement::all();
        $filiere =  Filiere::with("etablissement")->findOrFail($id);
        return view("Admin.Filieres.edit",compact("filiere","items"));
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
        $this->validate($request, Filiere::rules(true,$id));
        $filiere = Filiere::findOrFail($id);
        $filiere->update($request->all());
        return redirect()->route("Filieres.index")->withSuccess('Filiere modifie avec success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Filiere::destroy($id);
        return redirect(route("Filieres.index"))->withSuccess("Filiere supprime avec success");
    }
}
