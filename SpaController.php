<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Models\SpaTreatment;
use App\Models\user_spa;
use App\Models\Users;
use App\Http\Controllers\Controller;
class SpaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function Spa1()
    {  
        $treatments = DB::select('SELECT * FROM spa WHERE Spa_Treatment="Massage"');
        return view('SpaTreatments',['treatments'=>$treatments]);
    }
    public function Spa2()
    {  
        $treatments = DB::select('SELECT * FROM spa WHERE Spa_Treatment="Sauna"');
        return view('SpaTreatments',['treatments'=>$treatments]);
    }
    public function Spa3()
    {  
        $treatments = DB::select('SELECT * FROM spa WHERE Spa_Treatment="Facial"');
        return view('SpaTreatments',['treatments'=>$treatments]);
    }
    public function Spa4()
    {  
        $treatments = DB::select('SELECT * FROM spa WHERE Spa_Treatment="Jacuzzi"');
        return view('SpaTreatments',['treatments'=>$treatments]);
    }
    public static function Check($id)
    {  
        $cap = DB::table('spa')->where('Spa_Id',$id)->value('Spa_capacity');
        if($cap<=0){
            DB::table('spa')->where('Spa_Id',$id)->delete();
            }
    }
    public function Booking($id)
      
    { $user = auth()->user();
        $user_bal= DB::table('users')->where('email',$user->email)->value('User_Wallet');
        $price = DB::table('spa')->where('Spa_Id',$id)->value('Spa_Price');
        if($user_bal>=$price){
        $UserSpa = new user_spa();
        $UserSpa->User_Id=$user->email;
        $UserSpa->Spa_Id=$id;
        DB::table('users')->where('email',$user->email)->decrement('User_Wallet',$price);
        DB::table('spa')->where('Spa_Id',$id)->decrement('Spa_capacity',1);
        $UserSpa->save();
        return view('success');
        } 
        else return view('failure');
    }
}