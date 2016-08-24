<?php



Route::controller('login', 'LoginController');
Route::get('logout', 'LoginController@getLogout');

Route::controller('register', 'RegisterController');

Route::controller('password', 'RemindersController');


Route::resource('profile', 'ProfileController', array(
	'only' => array(
		'index',
		'update' 
	) 
));

Route::resource('user', 'UserController', array(
	'only' => array(
		'index',
		'update' 
	) 
));

Route::controller('dashboard', 'DashboardController');

Route::controller('attendance','AttendanceController');


Route::controller('/', 'HomeController');
