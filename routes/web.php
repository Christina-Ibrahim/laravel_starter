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

Route::get('/data', function () {
    $data = [];
    $data['id'] =10;
    $data['name'] = 'christina';
    return view('welcome' , $data);
});

Route::get('/test', function () {
    return view('test',[
        'var1' =>'variable1',
        'var2' => 'variable2' ]) -> with('data',22) ;
});

// Route::namespace('Front')->group(function(){

// })

// Route::group(['namespace'=>'secondCon'],function(){
//     Route::get('second','fcontroller@showstring');
//     Route::get('second2','fcontroller@showstring2');

// });

Route::resource('news','NewsController');

Route::get('index','NewsController@getIndex');

Route::get('Hello','twocon@getindex2');

Route::get('landing' ,'twocon@getLanding');

Route::get('about' ,'twocon@AboutMethod');



Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
// Route::group([
//     'middleware' => 'verified'
// ]
// ,function(){
//     Route::get('/home', 'HomeController@index')->name('home');
// });


Route::get('/',function(){
    return 'Home';
});
