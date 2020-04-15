<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\symptom;

class SymptomApiController extends Controller
{
	public function create(Request $request)
	{
		$symptoms = new symptom();
        $symptoms->description = $request->input('description');
        $symptoms->link = $request->input('link');
        $symptoms->save();
        return response()->json($symptoms);
	}
	public function show()
	{
		$symptoms = symptom::all();
		return response()->json($symptoms);
	}
	
	    public function deletebyid(Request $request,$id)
    {
    	$symptoms = symptom::find($id);
    	$symptoms->delete();
    	return response()->json($symptoms);
    }
}
