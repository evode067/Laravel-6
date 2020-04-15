  <?php
  
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\compony; 
//use Illuminate\Support\Facades\input;  

class testing extends Controller
{
  public function index()
  {
    return view('userprofile');
  }
  public function save(Request $req)
  {
    print_r( $req->input());
    $user = new company;
    $user->name = $req->name;
    $user->address =  $req->address;
    echo $user->save();
  }
    public function index()
    {
    	return view("insert");
    }
    public function store(Request $request)
    {
   $user = new user;
   $user->email=input::get("email");
   $user->firstname= input::get("firstname");
   $user->usertype=input::get("usertype");	
    }
    //$user->save()
    //return "saved in database";
}
