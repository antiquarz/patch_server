<?php

namespace App\Http\Controllers;

use App\SensorData;
use Illuminate\Http\Request;

class SensorDataController extends Controller
{

    public function show()
    {
        return response()->json(SensorData::all());
       
    }

    public function showLimited()
    {
        return response()->json( SensorData::all()->limit(10)->get());
    }


    public function create(Request $request)
    {
        $sensorData = SensorData::create($request->all());

        return response()->json($sensorData, 201);
    }
}
