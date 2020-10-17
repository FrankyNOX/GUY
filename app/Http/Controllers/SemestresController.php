<?php

namespace App\Http\Controllers;

use App\Models\Semestre;
use Illuminate\Http\Request;

class SemestresController extends Controller
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
        $items = Semestre::all();
        return view("Admin.Semestres.index",compact("items"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Admin.Semestres.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,Semestre::rules());
        Semestre::create($request->all());
        return redirect()->route("Semestres.index")->withSuccess("Semestre creer avec success");
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
        $semestre =  Semestre::findOrFail($id);
        return view("Admin.Semestres.edit",compact("semestre"));
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
        $this->validate($request, Semestre::rules(true,$id));
        $semestre = Semestre::findOrFail($id);
        $semestre->update($request->all());
        return redirect()->route("Semestres.index")->withSuccess('Semestre modifie avec success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Semestre::destroy($id);
        return redirect(route("Semestres.index"))->withSuccess("Semestre supprime avec success");
    }
}
