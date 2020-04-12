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

Route::get('/Register', function () {
    return view('auth.register');
});
Route::get('/error', function () {
    return view('error');
});

Route::get('/Login', function () {
    return view('login');
});

Route::get('/Edit_book', function () {
    return view('edit_book');
});

Route::get('/Edit_note', function () {
    return view('edit_note');
});

Route::get('/Edit_tutor', function () {
    return view('edit_tutor');
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/View_list_book', function(){
    return view('book_table');
});
Route::get('/View_list_note', function(){
    return view('note_table');
});
Route::get('/View_list_tutor', function(){
    return view('tutor_table');
});


Route::get('/Listing', function () {
    return view('listing');
});





Route::get('/view', function () {
    return view('show');
});


Auth::routes(['verify' => true]);

//Verify MAIL
Route::get('verify/{email}/{verifyToken}', 'RegController@sendEmailDone')->name('sendEmailDone');
Route::get('VerifyEmailFirst','RegController@VerifyEmailFirst')->name('VerifyEmailFirst');

Route::get('/verifyemail', function () {
    return view('verifyemail');
});
Route::post('/verifyemail','RegController@getData')->name('resend_verify_email');
Route::get('VerifyEmailFirst','RegController@store');
//End Mail

//House Starts
Route::resource('house','HouseController');
Route::get('/house/edit', 'HouseController@edit');
Route::get('/buddyup/{id}', 'HouseController@showBuddyUp');

Route::get('/house/edit', function () {
    return view('house.edit');
});

//End House

Route::get('/home', 'HomeController@index');
Route::get('/view','BookController@show');


Route::get('profile', function () {
    // Only verified users may enter...
})->middleware('verified');





//Search
Route::get('/', 'SearchController@index');
Route::get('/', 'SearchController@index');


Route::resource('/home','HomeController');

Route::resource('user','UserController');
//Everythig 
Route::resource('listing_book','BookController');
//Route::get('/View_list_book', 'BookController@index');
Route::get('/allpost', 'BookController@index');

//Book
Route::resource('book','NewBookController');
Route::get('/book', 'NewBookController@index');


//Note
Route::resource('note','NoteController');
Route::get('/note', 'NoteController@index');

//Tutor
Route::resource('tutor','TutorController');
Route::get('/tutor', 'TutorController@index');

//Registration
Route::resource('registration','RegController');
Route::post('/store','RegController@store');
Route::get('user.password', 'UserController@changePassword');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



