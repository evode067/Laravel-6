 <?php

use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|

*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/medicine','ApiController@create');
Route::get('/medicineshowdata','ApiController@show');
Route::delete('/medicinedelete/{id}','ApiController@deletebyid');
Route::put('/medicineupdate/{id}','ApiController@updatebyid'); 
Route::post('/symptom','SymptomApiController@create'); 
Route::get('/symptomsshowdata','SymptomApiController@show');
Route::delete('/symptomdelete/{id}','SymptomApiController@deletebyid');
  
Route::post('/login','UserController@login');
Route::group(['middleware'=> 'auth::api'],function()
{Route::post('details','UserController@details');
});
Route::get("insert","testing@index");
Route::post("store","testing@store");
Route::post('register','UserController@register'); 