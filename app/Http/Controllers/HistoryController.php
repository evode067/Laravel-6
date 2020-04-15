<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
//use App\customer; #import customer
use App\symptom;
use Illuminate\Support\Facades\Input;
use DB;
use App\history;
use App\user;


class HistoryController extends Controller
{
   //
    public function index()
    {
    	return view("insertsymptom");
    }    
    public function store(Request $req)
    {
    
        $this->validate($req, [
            'description'=>'required',
            //'date'=>'required',
            //'favorite'=>'required'
            ]);
    	// $user = new symptom;
    	// $user->description=Input::get("description");
    	// $user->link=Input::get("link");
    	// 	$user->save();
    	// 	return redirect('showall');
    	$z=$req->email;
    	        $user = DB::select("select* from users where email ='$z'");
        //$user = customer::find($id);
 
     	foreach($user as $use )
     	{
     	
     		$y=$use->id;
     	 }

    $use = new history;
   $use->save(  [$use->historydate = $req->historydate,$use->userid = $y,$use->description = $req->description,
    $use->link =  $req->link,
    ]);
echo "".$req->historydate;
// $hist= new history;
// $hist->save( [$hist->historydate = $req->date]);
  $user = DB::select("select* from history where userid ='$y'");
   return view("viewall",compact('user'));	
   }

public function update(Request $request, $id)
{
        $user = history::find($id);
        $user->save([$user->historydate= $request->historydate,$user->description = $request->description,$user->link = $request->link]);
        // Input::get("historydate");
        // $user->description=Input::get("description");
        // $user->link=Input::get("link");
       
        //     $user->save();
            return redirect('insert');  
}
public function edit($description)
{
    $user = DB::table("history")->where('description', $description)->first();
       // $user = customer::find($id);
        return view('update', compact('user'));
        echo "".$req->historydate;
}
public function prediction(Request $request)
{
    $s=DB::select("select historydate from history");
    foreach ($s as $ss) {
        $yy=$ss->historydate;

        $interval = diff($yy);
    }
    echo "$yy";
    

}
}
 // public function showall()
 //  {
 // $user = DB::select("select* from history where id ='$y'");
 //  return view("viewall",compact('user'));	
 //  }
//}


//     public function showall()
//     {
//         $user = customer::all();
//         return view("viewall", compact('user'));
//     }
//     public function show($name)
//     {
//         $user = DB::table("customers")->where('name', $name)->first();
//        // $user = customer::find($id);
//         return view("customername", compact('user'));
//     }
// public function edit($name)
// {
//     $user = DB::table("customers")->where('name', $name)->first();
//        // $user = customer::find($id);
//         return view('update', compact('user'));
// }

// public function update(Request $request, $id)
// {
//         $user = customer::find($id);
//         $user->name=Input::get("name");
//         $user->email=Input::get("email");
//         $user->country=Input::get("country");
//         $user->gender=Input::get("gender");
//         $user->favorite=implode(", ", Input::get("favorite")); #for checkbox;
//         if(Input::hasFile("image"))
//             {
//                 $files = Input::file('image');
//                 $name = time()."".$files->getClientOriginalName();
//                 $image = $files->move(public_path().'/image',$name);
//                 $user->image=$name;

//             }
//             $user->save();
//             return redirect('showall');   
// }
// public function destroy($id)
// {
//     $user = customer::find($id);
//     $user->delete();
//     return redirect("showall");

// }
// public function done()
// {
//     return('welcome to laravel');
// }
// }

