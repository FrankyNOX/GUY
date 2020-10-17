<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Salle;
use Illuminate\Http\Request;

class EtudiantsController extends Controller
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
        $items = Etudiant::with('salle')->get();
        return view("Admin.Etudiants.index",compact("items"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = Salle::all();
        return view("Admin.Etudiants.create",compact('items'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,Etudiant::rules());
        Etudiant::create($request->all());
        return redirect()->route("Etudiants.index")->withSuccess("Etudiant creer avec success");
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
        $items = Salle::all();
        $etudiant  =  Etudiant::with("salle")->findOrFail($id);
        return view("Admin.Etudiants.edit",compact("items","etudiant"));
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
        $this->validate($request, Etudiant::rules(true,$id));
        $ue = Etudiant::findOrFail($id);
        $ue->update($request->all());
        return redirect()->route("Etudiants.index")->withSuccess('Etudiant modifie avec success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Etudiant::destroy($id);
        return redirect(route("Etudiants.index"))->withErrors("Etudiant supprime avec success");
    }
}
