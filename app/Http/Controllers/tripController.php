<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\trip;

class tripController extends Controller
{
    public function getTrip()
    {
        return response()->json(trip::all(),200);
    }

    public function getTripById($id)
    {
        $trip = trip::find($id);
        if(is_null($trip))
        {
            return response()->json(['message' => 'Registro no existe'], 404);
        }

        return response()->json($trip::find($id),200);

    }

    public function insertTrip(Request $request)
    {
        
        $trip = trip::create($request->all());
        return response($trip, 200);
    }
}
