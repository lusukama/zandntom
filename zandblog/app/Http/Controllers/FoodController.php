<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Foods;

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

    //Add store method
    public function store(Request $request){
      $this-> validate($request,[
        'foodName'=>'required',
        'price'=>'required'
      ]);

      // add the model
      $food = new Foods;
      $food->food_name = $request-> foodName;
      $food->food_price = $request-> price;
      $food->save();

      // redirect
      return redirect(route('home'))->with('successMsg','Order Successfully Added');
    }
}
