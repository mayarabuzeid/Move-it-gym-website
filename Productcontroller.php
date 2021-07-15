<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productmodel;
class Productcontroller extends Controller
{
   public function fetch()
   {
    $product=Productmodel::all();
    
    return view('prod',['product'=>$product]);
   }


   
}
