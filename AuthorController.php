<?php

namespace App\Http\Controllers;

use App\Author1;
use Illuminate\Http\Request;

class AuthorController extends Controller
{

    public function showAllAuthors()
    {
        return response()->json(Author1::all());
    }

    public function showOneAuthor($VIN)
    {
        return response()->json(Author1::find($VIN));
    }

    public function create(Request $request)
    {
        $author1 = Author1::create($request->all());

        return response()->json($author1, 201);
    }

    public function update($VIN, Request $request)
    {
        $author1 = Author1::findOrFail($VIN);
        $author1->update($request->all());

        return response()->json($author1, 200);
    }
    // public function update(Request $request, $VIN)
    // {
    //     $author1 = Author1::find($VIN);
    //     $author1->speed = $request->input('speed');
    //     $author1->Time = $request->input('Time');
    //     $author1->J1939EngineHour = $request->input('J1939EngineHour');
    //     $author1->Voltage = $request->input('Voltage');
    //     $author1->IMEI = $request->input('IMEI');
    //     $author1->breakpointdata = $request->input('breakpointdata');
    //     $author1->PhoneNumber = $request->input('PhoneNumber');
    //     $author1->HighRPMthreshold = $request->input('HighRPMthreshold');
    //     $author1->BreakDataMode = $request->input('BreakDataMode');
    //     $author1->VIN = $request->input('VIN');
    //     $author1->sava();
    //     return response()->json($author1);
        
     
    // }


    public function delete($VIN)
    {
        Author1::findOrFail($VIN)->delete();
        return response('Deleted Successfully', 200);
    }
}