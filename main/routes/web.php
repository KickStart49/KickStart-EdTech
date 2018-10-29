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

// .......................Welcome Page .............
// .......................Welcome Page .............

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// .......................Authentication .............
// .......................Authentication .............

Auth::routes();

Auth::routes(['verify' => true]);

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

// .......................Main Admin Routes .............
// .......................Main Admin Routes .............

Route::prefix('admin')->group(function () {

    Route::get('/dashboard', [
        'uses' => 'AdminController@showadmin',
        'as' => 'showadmin'
    ]);

});

// .......................Teacher .............
// .......................Teacher .............

Route::prefix('admin/kickstart/dashboard/teacher')->group(function () {

    Route::get('/', [
        'uses' => 'TeacherController@index',
        'as' => 'teacher'
    ]);

    Route::post('/addclass', [
        'uses' => 'TeacherController@addclass',
        'as' => 'teacher.addclass'
    ]);

    Route::post('/joinclass', [
        'uses' => 'TeacherController@joinclass',
        'as' => 'teacher.joinclass'
    ]);


    Route::get('/home', [
        'uses' => 'TeacherController@home',
        'as' => 'teacher.home'
    ]);

    

});

// .......................Student .............
// .......................Student .............

Route::prefix('admin/kickstart/dashboard/student')->group(function () {

    Route::get('/', [
        'uses' => 'StudentController@index',
        'as' => 'student'
    ]);

    Route::post('/joinclass', [
        'uses' => 'StudentController@joinclass',
        'as' => 'student.joinclass'
    ]);

    //->middleware('emailverify')

    Route::get('/allclasses', [
        'uses' => 'StudentController@allclasses',
        'as' => 'student.allclasses'
    ]);

    Route::post('/inviteparent', [
        'uses' => 'StudentController@inviteparent',
        'as' => 'student.inviteparent'
    ]);

    Route::post('/notifications', [
        'uses' => 'StudentController@notifications',
        'as' => 'student.notifications'
    ]);    

});
// .......................Parent .............
// .......................Parent .............

Route::prefix('admin/kickstart/dashboard/parent')->group(function () {

    Route::get('/', [
        'uses' => 'ParentController@index',
        'as' => 'parent'
    ]);

    Route::post('/addchild', [
        'uses' => 'ParentController@addchild',
        'as' => 'parent.addchild'
    ]);

    Route::get('/allclasses', [
        'uses' => 'ParentController@allclasses',
        'as' => 'parent.allclasses'
    ]);

    Route::post('/invitechild', [
        'uses' => 'ParentController@invitechild',
        'as' => 'parent.invitechild'
    ]);

});

// .......................Profile Routes .............
// .......................Profile Routes .............

Route::prefix('admin/kickstart/dashboard/teacher')->group(function () {

    Route::get('/in/{username}', [
        'uses' => 'profilecontroller@user',
        'as' => 'profile'
    ]);

});


// .......................Main Class Routes(Created by teachers) .............
// .......................Main Class Routes(Created by teachers) .............




// .......................Other Routes .............
// .......................Other Routes .............


// .......................Laravel Default .............
// .......................Laravel Default .............

Route::get('/home', 'HomeController@index')->name('home');