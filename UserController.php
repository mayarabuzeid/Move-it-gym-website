<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usermodel;
use App\Models\Cartmodel;
use App\Models\Userorder;
use DB;
use AuthenticatesUsers;
use Auth;
use App\Models\User;
use App\Models\User_Done_Exercises;

       
class UserController extends Controller
{

public function walletupdate(Request $req)
{
  $user=auth()->user();
  $userorder=new Userorder;
  $orderid=DB::table('orders')->pluck('product_id');
  $total = DB::table('orders')->pluck('product_price');

  $order=Cartmodel::all();
  $sum=0;
  
  foreach ($total as $total) {
    $sum=$sum+$total;
    }
 
           
         
            if($user->User_Wallet>=$sum)
            {
              foreach($orderid as $orderid)
             {
                $userorder->Product_ID=$orderid;
                $userorder->User_ID=$user->email;
                $userorder->save();
              }
              
              $user->User_Wallet= $user->User_Wallet-$sum;
              $user->save();
              DB::table('orders')->delete();
              
             return view('userview');
            }
          
           else{
            return view('fail',['order'=>$order]);
               }
          
             
          
            
          }

          public function cashondelivery()
          {
            DB::table('orders')->delete();
           return  view('cash');
          }
          protected $cid;
              public function save(Request $req)
              {
                  $this->validate($req, [
                      'name' => 'required',
                      'password' => 'required',
                      'mobilenumber' => 'required',
                      'email' => 'required',
                      'height' => 'required',
                      'weight' => 'required',
                      'gender' => 'required',
                      'address' => 'required',
                  ]);
                  $user = new User;
                  $user->User_Name = $req->input('name');
                  $user->User_Password = $req->input('password');
                  $user->User_MobileNO = $req->input('mobilenumber');
                  $user->User_Email = $req->input('email');
                  $user->User_Height = $req->input('height');
                  $user->User_Weight = $req->input('weight');
                  if ($req->input('gender') == "male") {
                      $user->User_Gender = 1;
                  } elseif ($req->input('gender') == "female") {
                      $user->User_Gender = 0;
                  }
                  $user->User_Address = $req->input('address');
                  $user->save();
                  return redirect('/1')->with('response', 'Registered Successfully');
              }
              public function subscribe()
              {
                  $user_auth = auth()->user();
                  $email = $user_auth->email;
                  $user = User::where('email', $email)->first();
                  if ($user->User_Premium == "true") {
                      $view = "subscribed";
                  } else if ($user->User_Wallet >= 50) {
                      $view = "success";
                      $affected = DB::table('users')
                          ->where('email', $email)->decrement('User_Wallet', 50, ['User_Premium' => 'true']);
                  } else {
                      $view = "failure";
                  }
                  return view($view);
              }




    
          }
        