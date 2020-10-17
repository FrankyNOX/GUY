<?php

namespace App\Http\Controllers;

use App\Models\Salle;
use App\Models\Unite_enseignement;
use App\Models\Unite_valeur;
use Illuminate\Http\Request;

class UVController extends Controller
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
        $items = Unite_valeur::with('unite_enseignement')->get();
        return view("Admin.UV.index",compact("items"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = Unite_enseignement::all();
        return view("Admin.UV.create",compact('items'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,Unite_valeur::rules());
        Unite_valeur::create($request->all());
        return redirect()->route("UV.index")->withSuccess("UV creer avec success");
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
        $uv =  Unite_valeur::with("unite_enseignement")->findOrFail($id);
        return view("Admin.UV.edit",compact("items","uv"));
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
        $this->validate($request, Unite_valeur::rules(true,$id));
        $uv = Unite_valeur::findOrFail($id);
        $uv->update($request->all());
        return redirect()->route("UV.index")->withSuccess('Uv modifie avec success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Unite_valeur::destroy($id);
        return redirect(route("UV.index"))->withErrors("UV supprime avec success");
    }
}
