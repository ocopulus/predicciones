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
    
    $json_file = file_get_contents('https://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20weather.forecast%20where%20woeid%20in%20(select%20woeid%20from%20geo.places(1)%20where%20text%3D%22Guatemala%2CGT%22)&format=json&diagnostics=true&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys&callback=');
	$vars = json_decode($json_file);
	$resultados = $vars->query->results->channel;
	$latitud = $resultados->item->lat;
	$longitud = $resultados->item->long;
	$velocidadviento ="Viento: ". round(($resultados->wind->speed/1.6),2)." km/h";
	$presion = "Presión: " . $resultados->atmosphere->pressure;
	$lluvia = $resultados->atmosphere->rising;
	$humedad= "Humedad: ".$resultados->atmosphere->humidity."%";
	$Visibilidad= "Visibilidad: ".$resultados->atmosphere->visibility;
	$amanecer = "Amacener: ".$resultados->astronomy->sunrise;
	$atardecer ="Atardecer: ".$resultados->astronomy->sunset;
	$fecha = $resultados->lastBuildDate;
	$temperatura=($resultados->item->condition->temp-32)/1.8;
	$pronostico= $resultados->item->condition->text;
	$imagen = $resultados->item->condition->code;
	$imagen2 ="http://l.yimg.com/a/i/us/we/52/".$imagen.".gif";
	$temp2 = round($temperatura,2)."° C";
	$coordenadas = $latitud."°,".$longitud."°";

	return view('clima', compact('temp2','imagen2','fecha', 'humedad', 'presion','Visibilidad','amanecer','atardecer','coordenadas'));
});

Route::get('/nombre', function(){
	$nombre = config('app.name');
	return $nombre;
});

Route::get('/tiempo', function(){
	$zona = config('app.timezone');
	return $zona;
});

Route::get('/runtime', function(){
	return view('clima2');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::resource('clima','ComentarioController');//indes, crate  y todas las demas funcioens

Route::get('/clima/index','ComentarioController@index')->name('index');
Route::post('/clima/store','ComentarioController@store')->name('store');
Route::get('/clima/show','ComentarioController@show')->name('show');
Route::get('/clima/destroy/{id}','ComentarioController@destroy')->name('destroy');