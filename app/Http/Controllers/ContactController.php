<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use App\contact;
use DB;
use App\users;
use App\user;
use App\Http\Controller\userprofileController;


class ContactController extends Controller
{
    //
    //
    public function index()
    {
    	return view("contact");
    }    
    public function store(Request $req)
    {
    $use = new contact;
   $use->save(  [$use->name = $req->name,$use->email = $req->email,$use->phone = $req->phone ,$use->message = $req->message,
    ]);
  return view("contact");

   }
   public function logn()
   {
    return view('index');
   }
public function login(Request $req)
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

        // if($us==$y && $u==$x)
        // {
        //  $user = DB::select("select* from user where email = '$us'");
        // //$user = users::all();
        // echo ",,,,,".$us;
        // return view("userprofile", compact('user'));
        // }
        // else
        // {
        //     echo"fail";
        // }
}
}
