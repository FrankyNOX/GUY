<?php

namespace App\Http\Controllers;

use App\Models\Niveau;
use App\Models\Option;
use Illuminate\Http\Request;

class NiveauxController extends Controller
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
        $items = Niveau::with('option')->get();
        return view("Admin.Niveaux.index",compact("items"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = Option::all();
        return view("Admin.Niveaux.create",compact('items'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,Niveau::rules());
        Niveau::create($request->all());
        return redirect()->route("Niveaux.index")->withSuccess("Niveau creer avec success");
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
        $niveau =  Niveau::with("option")->findOrFail($id);
        return view("Admin.Niveaux.edit",compact("niveau","items"));
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
        $this->validate($request, Niveau::rules(true,$id));
        $niveau = Niveau::findOrFail($id);
        $niveau->update($request->all());
        return redirect()->route("Niveaux.index")->withSuccess('Niveau modifie avec success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Niveau::destroy($id);
        return redirect(route("Niveaux.index"))->withErrors("Niveau supprime avec success");
    }
}
