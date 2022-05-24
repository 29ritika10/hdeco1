<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index(){
    $data['products']=Product::all();
    return view("user.home",$data);
   }
}
