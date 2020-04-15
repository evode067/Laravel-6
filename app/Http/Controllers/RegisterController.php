<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class RegisterController extends Controller
{
    //
        // 
        protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
    public function index()
    {
    	return view("index");
    }    
    public function store(Request $req)
    {
    	if ($req->confpassword== $req->password) {
    		# code...
    	
    $use = new User;
   $use->save(  [$use->name = $req->name,$use->email = $req->email,$use->password = $req->password,

    ]);
  return view("index");


   }
   else
   {
   	echo "your password doesn't match";
   	
   
   }
}}
