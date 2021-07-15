<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Exercises;
use App\Models\User;
use App\Models\User_Done_Exercises;
use App\Models\User_Fav_Exercises;
use Illuminate\Support\Facades\Auth;
class ExerciseController extends Controller
{
    public function save()
    {
        $Exercise = new Exercises;
        $Exercise->Exercise_Name = 'Dubmel Exercise';
        $Exercise->Exercise_Duration = 100;
        $Exercise->Exercise_Calorie = '100-200';
        $Exercise->Exercise_Difficulty = '5/5';
        $Exercise->Exercise_Equipment = 'Dubmel';
        $Exercise->Exercise_Type = 'Gif';
        $Exercise->Exercise_Img = 'Dubmels.jpg';
        $Exercise->Exercise_Display = 'Dubmels.gif';
        $Exercise->Exercise_Premium = 'true';
        $Exercise->save();
        return view('home');
    }
    public function read_gif()
    {
        if (Auth::check()) {
            $user_auth = auth()->user();
            $email = $user_auth->email;
            $User = User::where('email', $email)->first();
            $Fav = User_Fav_Exercises::where('User_ID', $email)->get();
        } else {
            $Fav = null;
            $User = null;
        }
        $Exercise = DB::select('SELECT * FROM exercises WHERE Exercise_Type="Gif"');
        return view('exercises_main')->with(compact('Exercise'))->with(compact('Fav'))->with(compact('User'));
    }
    public function read_video()
    {
        if (Auth::check()) {
            $user_auth = auth()->user();
            $email = $user_auth->email;
            $User = User::where('email', $email)->first();
            $Fav = User_Fav_Exercises::where('User_ID', $email)->get();
        } else {
            $Fav = null;
            $User = null;
        }
        $Exercise = DB::select('SELECT * FROM exercises WHERE Exercise_Type="Video"');
        return view('exercises_main')->with(compact('Exercise'))->with(compact('Fav'))->with(compact('User'));
    }
    public function single($id)
    {
        $user_auth = auth()->user();
        $Fav = null;
        $User = null;
        if ($user_auth != null) {
            $email = $user_auth->email;
            $User = User::where('email', $email)->first();
            $Fav = User_Fav_Exercises::where('User_ID', $email)->get();
        }
        $Exercise = Exercises::where('Exercise_Id', $id)->first();
        return view('exercise')->with(compact('Exercise'))->with(compact('User'))->with(compact('Fav'));
    }
    public function done($id)
    {
        $user_auth = auth()->user();
        $email = $user_auth->email;
        $user_exercise = new User_Done_Exercises;
        $user_exercise->User_ID = $email;
        $user_exercise->Exercise_ID = $id;
        $user_exercise->save();
        $done_ex = DB::table('user__done__exercises')->select('Exercise_ID')->where('User_ID', $email)->get();
        $done_ex->toArray();
        $Exercise = array();
        $x = 0;
        foreach ($done_ex as $arr) {
            $Exercise[$x] = DB::table('exercises')->where('Exercise_ID', $arr->Exercise_ID)->first();
            $x = $x + 1;
        }
        return view('done', compact('Exercise'));
    }
    public function read_done()
    {
        $user_auth = auth()->user();
        $email = $user_auth->email;
        $done_ex = DB::table('user__done__exercises')->select('Exercise_ID')->where('User_ID', $email)->get();
        $done_ex->toArray();
        $Exercise = array();
        $x = 0;
        foreach ($done_ex as $arr) {
            $Exercise[$x] = DB::table('exercises')->where('Exercise_ID', $arr->Exercise_ID)->first();
            $x = $x + 1;
        }
        $Fav = User_Fav_Exercises::where('User_ID', $email)->get();
        return view('done', compact('Exercise'), compact('Fav'));
    }
    public function fav($id)
    {
        $user_auth = auth()->user();
        $email = $user_auth->email;
        $check_duplicate = DB::table('user__fav__exercises')->where([
            ['User_ID', $email],
            ['Exercise_ID', $id],
        ])->get();
        if (count($check_duplicate) == 0) {
            $user_exercise = new User_Fav_Exercises;
            $user_exercise->User_ID = $email;
            $user_exercise->Exercise_ID = $id;
            $user_exercise->save();
        } else {
            User_Fav_Exercises::where([
                ['User_ID', $email],
                ['Exercise_ID', $id],
            ])->delete();
        }
        $fav_ex = DB::table('user__fav__exercises')->select('Exercise_ID')->where('User_ID',  $email)->get();
        $fav_ex->toArray();
        $Exercise = array();
        $x = 0;
        foreach ($fav_ex as $arr) {
            $Exercise[$x] = DB::table('exercises')->where('Exercise_ID', $arr->Exercise_ID)->first();
            $x = $x + 1;
        }
        return back();
    }
    public function read_fav()
    {
        $user_auth = auth()->user();
        $email = $user_auth->email;
        $fav_ex = DB::table('user__fav__exercises')->select('Exercise_ID')->where('User_ID', $email)->get();
        $fav_ex->toArray();
        $Exercise = array();
        $x = 0;
        foreach ($fav_ex as $arr) {
            $Exercise[$x] = DB::table('exercises')->where('Exercise_ID', $arr->Exercise_ID)->first();
            $x = $x + 1;
        }
        return view('fav', compact('Exercise'));
    }
}