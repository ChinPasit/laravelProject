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
Route::post('file/upload', 'FileController@store')->name('file.upload');
Route::get('/doc',function(){
    return view('/Template/doc');
})->name('doc');

Route::get('/', function () {
    return view('/Template/thehome');
});
// Route::get('/testupload', function () {
//     return view('/testupload');
// })->name('testupload');
/* ---------------------------- User ---------------------------- */
Route::get('/thehome', function () {
    return view('/Template/thehome');
})->name('thehome');

Route::get('/doc', function () {
    return view('/Template/doc');
})->name('doc');

Route::get('/loginUser', function () {
    return view('/Template/loginUser');
})->name('loginUser');

/* ---------------------------- ADMIN ---------------------------- */
Route::get('/thehomeADMIN', function () {
    return view('/TemplateADMIN/thehomeADMIN');
})->name('thehomeADMIN');

Route::get('/registerUser', function () {
    return view('/TemplateADMIN/registerUser');
})->name('registerUser');

/* ---------------------------- Authtication ---------------------------- */
Auth::routes(['verify'=> true]);
//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/token', function () {
    return Auth::user()->createToken('test');
});
//Route for normal user
Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index');
});
//Route for admin
Route::group(['prefix' => 'admin'], function(){
    Route::group(['middleware' => ['admin']], function(){
        Route::get('/Template/AdminTest', 'admin\AdminController@index');
    });
});
/* ------------------------------ Chagepassword ---------------------------- */
Route::get('/chagepassword',function(){
    return view('/auth/passwords/chagepassword');
});
Route::get('/changePassword','HomeController@showChangePasswordForm');
Route::post('/changePassword','HomeController@changePassword')->name('changePassword');

Route::get('/testupload','HomeController@upload')->name('testupload');


