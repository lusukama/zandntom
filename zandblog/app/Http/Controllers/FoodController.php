<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodController extends Controller
{
    //Add function index here
    public function index(){
      return view('welcome');
    }
    // create our restaurant here
    public function restaurant(){
      return view('restaurant');
    }
    // add contact page here function
    public function contact(){
      return view('contact');
    }
    // create function
    public function create(){
      return view('create');
    }
}
