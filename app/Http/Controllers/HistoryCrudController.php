<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use history;

class HistoryCrudController extends Controller
{
  
  public function showall()
  {
  $user = history::all();
  return view("index.viewall",compact('user'));	
  }
  
}
