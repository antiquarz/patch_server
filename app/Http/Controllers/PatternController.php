<?php

namespace App\Http\Controllers;

use App\Pattern;
use Illuminate\Http\Request;

class PatternController extends Controller
{

    public function show()
    {
        return response()->json(Pattern::all());
       
    }

    public function create(Request $request)
    {
        $sensorData = Pattern::create($request->all());

        return response()->json($sensorData, 201);
    }
}
