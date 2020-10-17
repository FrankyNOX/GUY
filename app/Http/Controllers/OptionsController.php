<?php

namespace App\Http\Controllers;

use App\Models\Cycle;
use App\Models\Option;
use Illuminate\Http\Request;

class OptionsController extends Controller
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
        $items = Option::with('cycle')->get();
        return view("Admin.Options.index",compact("items"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = Cycle::all();
        return view("Admin.Options.create",compact('items'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,Option::rules());
        Option::create($request->all());
        return redirect()->route("Options.index")->withSuccess("Option creer avec success");
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
        $items = Cycle::all();
        $option =  Option::with("cycle")->findOrFail($id);
        return view("Admin.Options.edit",compact("option","items"));
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
        $this->validate($request, Option::rules(true,$id));
        $option = Option::findOrFail($id);
        $option->update($request->all());
        return redirect()->route("Options.index")->withSuccess('Option modifie avec success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Option::destroy($id);
        return redirect(route("Options.index"))->withSuccess("Option supprime avec success");
    }
}
