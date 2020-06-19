<?php
use App\Servicios;
use App\User;
#use App\Permission\Models\Role;
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
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

// -------[--Rutas cobrador--]------------
//Route::get('/cobrador',     'cobrador\CobradorController@index')->middleware('auth');;
  Route::resource('/cobrador', 'cobrador\CobradorController');
  Route::resource('/servicios', 'cobrador\serviciosController');
  Route::resource('/versuscriptor', 'cobrador\SuscriptorController');
  Route::get('/buscar', 'cobrador\SuscriptorController@action')->name('buscar.action');


// -------[--Rutas suscriptor--]------------
//Route::get('/suscriptor', 'suscriptor\SuscriptorController@index')->middleware('auth');;
Route::resource('/suscriptor', 'suscriptor\SuscriptorController');
Route::resource('/historial', 'suscriptor\HistorialController');
Route::resource('/verservicios', 'suscriptor\ServiciosController');
Route::resource('/Servicio_Suscriptor', 'suscriptor\Servicio_SuscriptorController');


//-----------[--Ritas de errores--]----------------------------------------------
Route::resource('/error-404', 'ErrorController');



//-------------------[--About--]-------------------------
Route::get('/about', function () {

  $servicio = Servicios::orderBy('id', 'desc')
              ->get();

    return view('about',['servicio' => $servicio]);
});
Route::resource('/chat', 'chatController');
Route::post('/register/check', 'Auth\RegisterController@check')->name('register.check');
Route::post('/validar','EntradaController@validar');
