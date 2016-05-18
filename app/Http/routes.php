<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
	Route::get('access', function () {
		echo 'you have access';
	})->middleware('isAdmin');

	Route::get('/home', 'HomeController@index');

	Route::get('test', 'TestController@index');

	Route::get('admin', function () {
	    return view('test');
	});
*/



Route::group(['middleware' => 'web'], function () {
	
	// Authenticationd Routes
	Route::auth();

// Route::get('/classes', function(){
// 	$classes = App\MyClass::all();
// 	foreach ($classes as $class) {
// 		echo 'Leerlingen in klas' . $class->year . $class->letter . ': <br />';

// 		foreach ($class->users as $user) {
// 			echo $user->first_name . '<br />';
// 		}
// 		echo '<br />';
// 	}
// });

// Route::get('/edu', function(){
// 	$educations = App\Education::all();
// 	foreach ($educations as $education) {
// 		echo 'Opleiding' . $education->name . '. Afkorting ' . $education->abr . '<br />';
		
// 		foreach ($education->classes as $class) {
// 			echo 'klas: ' . $education->abr . $class->year . $class->letter . '<br />';
// 		}
// 		echo '<br />';
// 	}
// });

// Route::get('/user', function(){
// 	$users = App\User::all();
// 	foreach ($users as $user) {
// 		echo 'student: ' . $user->full_name . ' MD2' . $user->userClass->letter . '<br />';
		
// 		// foreach ($user->classes as $class) {
// 		// 	echo 'klas: ' . $education->abr . $class->year . $class->letter . '<br />';
// 		// }
// 		echo '<br />';
// 	}
// });

	// Default Route
	Route::get('/', 'WelcomeController@index');

	// Dashboard Route
	Route::get('/dashboard', 'DashboardController@index');
	
	// Timetable Route
	Route::get('/timetable', 'TimetableController@index');

	// User Route
	Route::get('/user/profile', 'UserController@showProfile');

});