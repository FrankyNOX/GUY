<?php

namespace App\Http\Controllers;

use App\Models\Salle;
use App\Models\Unite_enseignement;
use Illuminate\Http\Request;

class UEController extends Controller
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
        $items = Unite_enseignement::with('salle')->get();
        return view("Admin.UE.index",compact("items"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = Salle::all();
        return view("Admin.UE.create",compact('items'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,Unite_enseignement::rules());
        Unite_enseignement::create($request->all());
        return redirect()->route("UE.index")->withSuccess("UE creer avec success");
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
        $ue =  Unite_enseignement::with("salle")->findOrFail($id);
        return view("Admin.UE.edit",compact("items","ue"));
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
        $this->validate($request, Unite_enseignement::rules(true,$id));
        $ue = Unite_enseignement::findOrFail($id);
        $ue->update($request->all());
        return redirect()->route("UE.index")->withSuccess('UE modifie avec success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Unite_enseignement::destroy($id);
        return redirect(route("UE.index"))->withErrors("UE supprime avec success");
    }
}
