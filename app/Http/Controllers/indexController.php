<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\users;
use App\user;
use App\Http\Controller\userprofileController;

class indexController extends Controller
{
    //
public function index()
{
  	return view("index");
}

     public function admin(Request $req)
    {

    	//$use = new user;
    	//echo "form"."<br>";
    	// echo"email"."<br>".
    	 $us=$req->email;
    	 $u=$req->password;
    	 // echo $u;
        $user = DB::select("select* from users where email = '$us'");
        //$user = customer::find($id);
 
     	foreach($user as $use )
     	{
     		$x=$use->password;
     		$y=$use->email;
     	}
     	
// echo "from database"."<br>";
// echo $x;
// echo $y;

     	 if($us==$y && $u==$x)
     	 {
     	  return view('index');
        }

        else
        {
            return("sorry try Again");
        }
      //   //$user = users::all();
      //   echo ",,,,,".$us;
      //   return view("userprofile", compact('user'));
     	// }
     	// else
     	// {
     	// 	echo"fail";
     	// }
}

}
