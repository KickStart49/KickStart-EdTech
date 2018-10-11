<?php

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
})->name('welcome');

// .......................Login Routes .............

Route::prefix('login')->group(function () {
    
    Route::get('psd', function () {
        if(Session::get('email')){
            return view('auth.login.password');
        }
        else{
            return redirect()->back();
        }
    })->name('loginpsd');
    
    Route::get('identifier',[
        'uses' => 'LoginAuthCheck@login',
        'as' => 'logindemo'
    ]);

    Route::post('success', [
        'uses' => 'LoginAuthCheck@loginsuccess',
        'as' => 'loginsuccess'
    ]);

    Route::post('identifier/emailverify' , [
        'uses' => 'LoginAuthCheck@email',
        'as' => 'verifyemail'
    ]);
    Route::post('psd/passwordverify' , [
        'uses' => 'LoginAuthCheck@password',
        'as' => 'verifypassword'
    ]);
    Route::post('psd/psdrequest' , [
        'uses' => 'LoginAuthCheck@passwordview',
        'as' => 'requestpassword'
    ]);
 
});

Route::get('/in/{username}', [
    'uses' => 'profilecontroller@user',
    'as' => 'profile'
]);

Route::get('/showadmin', [
    'uses' => 'admincontroller@showadmin',
    'as' => 'showadmin'
]);

Route::get('/dashboard', function () {
    return view('welcome');
})->name('dashboard');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes(['verify' => true]);

