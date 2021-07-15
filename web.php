<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home2');
});

Route::get('login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('resources\views\auth\register.blade.php');
});

Route::get('contact', function () {
    return view('contact');
});
Route::get('success', function () {
    return view('success');
});
Route::get('failure', function () {
    return view('failure');
});
Route::get('Obesity', function () {
    return view('Obesity');
});
Route::get('WeightGain', function () {
    return view('WeightGain');
});
Route::get('Weightloss', function () {
    return view('Weightloss');
});
Route::get('Fitness', function () {
    return view('Fitness');
});


Route::get('/home2/classes/zumba','App\Http\Controllers\ClassesController@index1');
Route::get('/home2/classes/yoga','App\Http\Controllers\ClassesController@index2');
Route::get('/home2/classes/aerobics','App\Http\Controllers\ClassesController@index3');
Route::get('/home2/classes/machines','App\Http\Controllers\ClassesController@index4');


Route::get('Massage', 'App\Http\Controllers\SpaController@Spa1');
Route::get('Sauna', 'App\Http\Controllers\SpaController@Spa2');
Route::get('Facial', 'App\Http\Controllers\SpaController@Spa3');
Route::get('Jacuzzi', 'App\Http\Controllers\SpaController@Spa4');
Route::post('/calculate','app\Http\Controllers\CalcController.php@bmi');

Route::get('diet', function () {
    return view('diet');
})->middleware('auth');
Route::get('view-records','App\Http\Controllers\studViewController@index');


// Route::get('haneen','app\Http\Controllers\DataController.php@person');
Route::get('haneen', function () {
    return view('haneen');
})->middleware('auth');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('cart','App\Http\Controllers\Productcontroller@fetch');
Route::post('cart2','App\Http\Controllers\Cartcontroller@saving');
Route::get('cart2','App\Http\Controllers\Cartcontroller@fetch');
Route::post('cart2','App\Http\Controllers\Cartcontroller@updates');
Route::get('payment','App\Http\Controllers\Cartcontroller@fetchtouserview');
Route::get('/delete/{name}','App\Http\Controllers\Cartcontroller@del');
Route::group(['middleware'=>['auth']],function(){
Route::get('payment','App\Http\Controllers\UserController@walletupdate');
Route::get('Subscribe/{id}', 'App\Http\Controllers\SpaController@Booking');
Route::get('/subscribe/{id}','App\Http\Controllers\ClassesController@subscribe');
Route::get('cashondelivery','App\Http\Controllers\UserController@cashondelivery');
});

Route::get('/deleteall','App\Http\Controllers\Cartcontroller@deleteall');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/gif', 'App\Http\Controllers\ExerciseController@read_gif');
Route::get('/videos', 'App\Http\Controllers\ExerciseController@read_video');
Route::get('/trainer', function () {
    return view('trainer');
});
//Route::post('/user', 'App\Http\Controllers\UserController@save');
Route::get('exercise/{id}', [
    "uses" => 'App\Http\Controllers\ExerciseController@single',
    "as" => 'single'
]);
Route::get('done/{id}', [
    "uses" => 'App\Http\Controllers\ExerciseController@done',
    "as" => 'done'
])->middleware('auth');
Route::get('/done', [
    "uses" => 'App\Http\Controllers\ExerciseController@read_done',
    "as" => 'read'
])->middleware('auth');
Route::get('/subscribe', [
    "uses" => 'App\Http\Controllers\UserController@subscribe',
    "as" => 'subscribe'
])->middleware('auth');
Route::get('fav/{id}', [
    "uses" => 'App\Http\Controllers\ExerciseController@fav',
    "as" => 'fav'
])->middleware('auth');
Route::get('/fav', [
    "uses" => 'App\Http\Controllers\ExerciseController@read_fav',
    "as" => 'readfav'
])->middleware('auth');
Route::get('/subscribtion', function () {
    return view('premium');
});


