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
    return view('welcome');
});

Auth::routes();
Route::get('/logout', 'App\Http\Controllers\HomeController@logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['as'=>'admin.','prefix' => 'admin','namespace'=>'App\Http\Controllers\admin','middleware'=>['auth','admin']], function () {
// echo 'j';die;		
    Route::get('dashboard', 'Home@index');
//    Route::get('all_category', 'Product_categories@index');
      
});



    Route::group(['as'=>'recruiter.','prefix' => 'recruiter','namespace'=>'App\Http\Controllers\recruiter','middleware'=>['auth','employer']], function () {
        // echo 'j';die;		
            Route::get('dashboard', 'Home@index');
           Route::get('addjobs', 'Home@addjobs');
           Route::post('addjobs', 'Home@addjobs');
           Route::get('profile', 'Home@profile');
           Route::post('profile', 'Home@profile');
           Route::get('alljoblist', 'Home@alljoblist');
           Route::post('jobstatus', 'Home@jobstatus');
           Route::get('jobstatus', 'Home@jobstatus');
           Route::post('candidatelist', 'Home@candidatelist');
           Route::get('candidatelist', 'Home@candidatelist');
           Route::post('candidadetail/{id}', 'Home@candidadetail');

           
              
        });


        Route::group(['as'=>'iuser','prefix' => 'iuser','namespace'=>'App\Http\Controllers\employee','middleware'=>['auth','employee']], function () {
            // echo 'j';die;		
                Route::get('dashboard', 'Home@index');
               Route::get('jobprofile', 'Home@jobprofile');
               Route::post('jobprofile', 'Home@jobprofile');
                  
            });