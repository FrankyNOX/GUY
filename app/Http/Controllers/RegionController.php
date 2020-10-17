<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $state_id = $request->input('state_id');
        $cities = City::where('state_id',$state_id)->get();
        return response()->json($cities);
    }
}
