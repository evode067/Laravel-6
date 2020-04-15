<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\users;
use App\user;
use Carbon\Carbon;
use App\Http\Controller\userprofileController;

class login1 extends Controller


{
    public function index()
    {
        return view('login1');
    }
    public function indexmenstrual()
    {
        return view('regularMenstruation');
    }
    public function menstruation(Request $req)
    {
        $mydate = $req->startdate;
        $length = $req->length;
        $period = $req->period;
        $daystosum =$length+$period;
        // $datesum = 
         $datesm = date('m-d-y',strtotime($mydate.'+'.$daystosum.'days'));
         //
         // $datesum =date('dd',strtotime($datesm .'+'.$daystosum.'days'));

         // echo "";
         // echo $datesum;
         echo "<br>";
        echo "your next Menstrution:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$datesm;
// $userPromotionDays = $req->startdate;
// // $daysToAdd = 5;
// $date = Carbon::createFromFormat('Y.m.d',$userPromotionDays );
// $daysToAdd = 5;
// $date = $date->addDays($daysToAdd);
// dd($date);



// $user=$req->startdate;

//         $userdate= Carbon::createFromFormat('YY.mm.dd',$user);
//         $userdate->addDays(30);
    // $fdate=$req->startdate;
    // // $tdate=$request->Tdate;

    // $star = Carbon::parse($fdate)->format('Y/m/d');
    // // $end =  Carbon::parse($tdate)->format('Y/m/d');

    // $star->AddDays(30);

// echo "uhhhuhuhhuhuhuhuuhu";
//echo "this is current date".$d;
    }
     public function admin(Request $req)
    //}
    //}
    
    {

    	//$use = new user;
    	//echo "form"."<br>";
    	// echo"email"."<br>".
    	 $us=$req->email;
    	 $u=$req->password;
    	 // echo $u;
        $user = DB::select("select* from users where email='$us' ");
        //$user = customer::find($id);
 
     	foreach($user as $use )
     	{
     		$y=$use->email;
            $x=$use->password;
            $w=$use->id;
     		
     	}
     // $current= new Carbon;
     // echo "".$current;
// echo "from database"."<br>";
// echo"".$y;
// echo "".$x;
// echo "from form"."<br>";
// echo"".$us;
// echo "".$u;

// $z=1;
// $w=1;
     	if($y=$us)
     	{
       //      echo "yes";
     	  $user = DB::select("select* from history where userid = '$w'");
        //$user = users::all();
         echo ",,,,,".$us;
        return view("userprofile", compact('user'));

     	}
     	else
     	{
     		echo"fail";
     	}
}

     

}
