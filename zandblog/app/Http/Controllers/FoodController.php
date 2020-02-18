<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodController extends Controller
{
    //Add function index here
    public function index(){
      return view('welcome');
    }
}
