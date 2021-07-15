<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cartmodel;
use App\Models\Productmodel;
use App\Models\Usermodel;
use DB;
class Cartcontroller extends Controller
{
    
  public function saving(Request $req)
  {

    $cart=new Cartmodel;
      
      $cart->quantity=$req->quantity;
      $cart->product_price=($cart->quantity)*($req->price);
      $cart->totalprice=$cart->product_price;
      $cart->productname=$req->name;
      $cart->image=$req->image;
      $cart->description=$req->description;
      $cart->product_id=$req->id;
      $cart->save();
      return redirect('cart');
  }



   
    function updates(Request $req)
    {
       
  
      $product=DB::table('products')->where('Product_Name',$req->name)->value('Product_Quantity');
      
      $countproducts=DB::table('orders')->where('productname',$req->name)->count();
      if($product>0){
          if($countproducts>0){
          
        DB::table('orders')->where('productname',$req->name)->increment('quantity',$req->quantity);
        DB::table('products')->where('Product_Name',$req->name)->decrement('Product_Quantity',$req->quantity);
        DB::table('orders')->where('productname',$req->name)->increment('product_price',($req->quantity)*($req->price));
    
        }
        else{
            $cart=new Cartmodel;
            $cart->quantity=$req->quantity;
            $cart->product_price=($cart->quantity)*($req->price);
              $cart->totalprice=$cart->product_price;
              $cart->productname=$req->name;
            $cart->image=$req->image;
            $cart->description=$req->description;
            $cart->product_id=$req->id;
             echo  $cart->save();
             DB::table('products')->where('Product_Name',$req->name)->decrement('Product_Quantity',$req->quantity);
        
        
      
    }
    return redirect('cart');
  }
  else{
    
    return redirect('cart');
    }
    
  }
    

    public function fetch()
   {
    $cart=Cartmodel::all();
    
    return view('bag',['cart'=>$cart]);
   }
public function fetchtouserview()
{
  $cart=Cartmodel::all();
    
    return view('userview',['cart'=>$cart]);
}
   
   

   public function del(Request $req)
   {
    $product=DB::table('orders')->where('productname',$req->name)->value('quantity');
    DB::table('products')->where('Product_Name',$req->name)->increment('Product_Quantity',$product);
    DB::table('orders')->where('productname',$req->name)->delete();
  
    
    return redirect('cart2');
   }
   public function deleteall(Request $req)
   {
    $quantity=DB::table('orders')->pluck('quantity');
     foreach($quantity as $quantity){
     
    DB::table('products')->where('Product_Name',$req->name)->increment('Product_Quantity',$quantity);
    DB::table('orders')->delete();
     }
    
    return redirect('homepage');
   }
   

  

  }
