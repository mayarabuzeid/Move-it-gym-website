<?php
namespace App\Http\Controllers;
use DB;
use App\Http\Requests;
use App\Models\Classes;
use App\Models\User_Class;
use App\Models\Trainer_Class;
use App\Models\Trainers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
class ClassesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index1()
    {
        $classes= DB::select('SELECT * FROM classes WHERE Class_name="zumba"');
        return view('classview',['classes'=>$classes]);
    }
    public function index2()
    {
        $classes= DB::select('SELECT * FROM classes WHERE Class_name="yoga"');
        return view('classview',['classes'=>$classes]);
    }
    public function index3()
    {
        $classes= DB::select('SELECT * FROM classes WHERE Class_name="aerobics"');
        return view('classview',['classes'=>$classes]);
    }
    public function index4()
    {
        $classes= DB::select('SELECT * FROM classes WHERE Class_name="machines"');
        return view('classview',['classes'=>$classes]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Classes  $classes
     * @return \Illuminate\Http\Response
     */
    public function show(Classes $classes)
    {
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Classes  $classes
     * @return \Illuminate\Http\Response
     */
    public function subscribe($id,Request $request)
    {  
        $classes= Classes::find($id);
        $user = auth()->user();
        $total=$classes->Class_price * $request->input('quantity') ;
        if($user->User_Wallet>=$total){
            $US= new User_Class;
              $US->Us_Id=$user->email;
              $US->CL_Id=$classes->Class_Id;
              DB::table('classes')->where('Class_Id',$classes->Class_Id)->increment('Class_capacity');
              DB::table('users')->where('id',$user->id)->decrement('User_Wallet',$total);
            $US->save();
            return redirect('success');
        }
        else{
            return redirect('failure');
        }
    }
    public static function trainer($id)
    { 
       $trainerID= DB::table('trainer__classes')->where('C_Id',$id)->value('Tr_Id');
       $trainer=DB::table('trainer')->where('Trainer_Id',$trainerID)->value('Trainer_Name');
        return $trainer;
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Classes  $classes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Classes $classes)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Classes  $classes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classes $classes)
    {
        //
    }
}