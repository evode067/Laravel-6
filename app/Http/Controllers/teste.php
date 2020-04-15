<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 
use App\users;
use App\menstruations;
use App\address;
use App\user;
use DD;

class teste extends Controller
{

  public function index()
  {
    return  view('userview');
  }
  function save(Request $req)
  {

   //  $use = new users;
   // $use->save(  [$use->email = $req->email,
   //  $use->firstname =  $req->firstname,
   //  $use->lastname =  $req->lastname,
   //  $use->usertype =  $req->usertype,
   //  ]);
     $input = new user;
    $input->save([$input->name =  $req->name,$input->lastname =  $req->lastname,$input->email = $req->email, $input->password = $req->password ]);
  
//     $r=$req->email;
// $x=DD::select("select* from users where email='$r'");
// foreach ($x as $y ) {
//   # code...
//   $z=$y->userid;
// }
//echo "".$z;
$user = new menstruations;
 $user->save( [   $user->type = $req->usertype
    ])
;
// $us = new address;
// $us->save([ $us->country =$req->country,$us->province = $req->province,
// $us->district = $req->district,$us->sector = $req->sector,$us->cel = $req->cel]);
   


   
  
}}