<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;
use DB;

class userprofileController extends Controller
{
    //
    public function showall(Request $req)
    {
    	    	 $us=$req->email;
    	 $u=$req->password;
    	 // echo $u;
        $user = DB::select("select* from user where email = '$us'");
        //$user = users::all();
        echo ",,,,,".$us;
        return view("userprofile", compact('user'));
    
}

}
