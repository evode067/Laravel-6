<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\medicine; 
class ApiController extends Controller  
{
    public function create(Request $request)
    {
    	$medicines = new medicine();
    	$medicines->description = $request->input('description');
    	$medicines->link= $request->input('link');
    	$medicines->medicineprice = $request->input('medicineprice');

    	$medicines->save();
    	return response()->json($medicines);

    }
    public function show()
    {
    	$medicine = medicine::all();
    	return response()->json($medicine);
    }
    public function deletebyid(Request $request,$id)
    {
    	$medicines = medicine::find($id);
    	$medicines->delete();
    	return response()->json($medicine);
    }
    public function updatebyid(Request $request,$id)
    {
    	$medicines =medicine::find($id);
    	$medicines->description= $request->input('description');
    	$medicines->link= $request->input('link');
    	$medicines->medicineprice= $request->input('medicineprice');
    	$medicines->save();
    	return response()->json($medicines);
    }
}
