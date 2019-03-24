<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
















//COSAS QUE SON APARTE Y QUE USARÉ HASTA DESPUÉS

Route::get('admin',function(){
	return view('roles.menuAdmin');
})->middleware('auth');

Route::get('pEmpleados',function(){
	return view('roles.empleados');
});

Route::get('pUsuarios',function(){
	return view('roles.usuarios');
});

Route::get('pTickets',function(){
	return view('roles.tickets');
});

Route::get('default',function(){
	return view('roles.default');
});

Route::get('registro',function(){
	return view('registro');
});

Route::get('registrado',function(){
	return view('registro-exitoso');
});

Route::post('guardarUsuario','Clientes@crear');

Route::get('menuClientes',function(){
	return view('menuClientes');
});

Route::get('menuEmpleados',function(){
	return view('menuEmpleados');
});


//para lo del login

Route::get('login', function () {
    return view('auth.login');
});

Route::post('login','Auth\LoginController@login')->name('login');


