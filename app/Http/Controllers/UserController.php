<?php

namespace App\Http\Controllers;
use App\User; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

class UserController extends Controller
{
    
        public function register(Request $request) 
    { 
      
		$input = $request->all(); 
        $input['password'] = bcrypt($input['password']); 
        $user = User::create($input); 
        $success['token'] =  $user->createToken('MyApp')->accessToken; 
        $success['name'] =  $user->name;
	return response()->json(['success'=>$success]); 
    }
    public function login()
    {
if(Auth::attempt(['email'=> request('email'), 'password' =>request('password')]))
	{
		$user = Auth::user();
		$success['token'] = $user->createToken('MyApp')-> accessToken;
		return response()->json(['success'=>$success]);
    }
    else
    {
    	return response()->json(['error'=>'Unauthorised'], 401);
    }
	}
}
