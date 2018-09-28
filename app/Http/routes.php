<?php

/**
 * Switch between the included languages
 */
require(__DIR__ . "/Routes/Global/Lang.php");

/**
 * Frontend Routes
 * Namespaces indicate folder structure
 */
$router->group(['namespace' => 'Frontend'], function () use ($router)
{
	require(__DIR__ . "/Routes/Frontend/Frontend.php");
	require(__DIR__ . "/Routes/Frontend/Access.php");
});

/**
 * Backend Routes
 * Namespaces indicate folder structure
 */
$router->group(['namespace' => 'Backend'], function () use ($router)
{
	$router->group(['prefix' => 'admin', 'middleware' => 'auth'], function () use ($router)
	{
		/**
		 * These routes need view-backend permission (good if you want to allow more than one group in the backend, then limit the backend features by different roles or permissions)
		 *
		 * Note: Administrator has all permissions so you do not have to specify the administrator role everywhere.
		 */
		$router->group(['middleware' => 'access.routeNeedsPermission:view-backend'], function () use ($router)
		{
			require(__DIR__ . "/Routes/Backend/Dashboard.php");
			require(__DIR__ . "/Routes/Backend/Access.php");
		});
	});
});

Route::get('tipo/create', [
	'uses'=>'TipoController@create',
	'as'=>'tipo.create'
]);
Route::post('tipo', [
	'uses'=>'TipoController@store',
	'as'=>'tipo.store'
]);

Route::get('habitacion/create', [
	'uses'=>'HabitacioneController@create',
	'as'=>'habitacion.create'
]);
Route::post('habitacion', [
	'uses'=>'HabitacioneController@store',
	'as'=>'habitacion.store'
]);

Route::get('reservaciones', [
	'uses'=>'ReservaController@reservaciones',
	'as'=>'reservaciones'
]);
Route::post('reservar_cliente',[
	'uses'=>'ReservaController@buscar_cliente',
	'as'=>'reservar_cliente'
]);
Route::post('Clientes',[
	'uses'=>'ClienteController@store',
	'as'=>'clientes'
]);
//Selecionar Tipo
Route::post('seleccionar_Tipo',[
	'uses'=>'ReservaController@seleccionar_tipo',
	'as'=>'seleccionar.tipo'
]);
//Registrar la reserva
Route::post('guarda_reserva',[
	'uses'=>'ReservaController@store',
	'as'=>'guarda_reserva'
]);

Route::get('reservas/index',[
	'uses' => 'ReservaController@index',
	'as' => 'reservas.index'
]);
/*
//para retornar las habitaciones
Route::get('habitaciones/{id}','TipoController@getHabitaciones');
*/
