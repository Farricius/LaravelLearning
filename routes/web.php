<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\editoriales_Controller;
use App\Http\Controllers\libros_Controller;
use App\Http\Controllers\enviarCorreoController;


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
    // return view('welcome');
    return "Bienvenido a la página xd";
});

// Route::get('/libros', [libros_controller::class , 'mostrarTodos']);
// Route::get('/libros/crear', [libros_controller::class , 'crearLibro']);
// Route::post('/libros/lanzarCrear', [libros_controller::class , 'lanzarCrearLibro']);
// Route::post('/libros/realizarUpdate', [libros_controller::class , 'realizarUpdate']);

// Route::get('/editoriales/crear', [editoriales_Controller::class , 'mostrarTodos']);

// Route::get('/libros/editar/{libro}', [libros_controller::class , 'editarLibro']);
// Route::get('/libros/{libro}', [libros_controller::class , 'detallesLibro']);
// Route::get('/editoriales/{editorial}', [editoriales_Controller::class , 'detallesEditorial']);

Route::get('/libros', [libros_controller::class , 'mostrarTodos']);
Route::get('/libros/crear', [libros_controller::class , 'crearLibro']);
Route::post('/libros/lanzarCreate', [libros_controller::class , 'lanzarCrearLibro']);
Route::post('/libros/lanzarEditarLibro', [libros_controller::class , 'lanzarEditarLibro']);

Route::get('/editorial/crear', [editoriales_Controller::class , 'crearEditorial']);
Route::post('/editorial/lanzarCreate', [editoriales_Controller::class , 'lanzarCrearEditorial']);
Route::get('/editorial', [editoriales_Controller::class , 'mostrarTodos']);

// Individuals: 
Route::get('/libros/editar/{libro}', [libros_controller::class , 'editarLibro']);
Route::get('/libros/{libro}', [libros_controller::class , 'detallesLibro']);
Route::get('/editorial/{editorial}', [editoriales_Controller::class , 'detallesEditorial']);

// Email
Route::get('/sendEmail', [enviarCorreoController::class , 'sendEmail']);

Route::get('/solicitud', [enviarCorreoController::class , 'solicitud']);

Route::get('/email/listadoPeticiones', [enviarCorreoController::class , 'listadoPeticiones']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

