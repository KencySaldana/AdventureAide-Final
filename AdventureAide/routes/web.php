<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OnePageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserPreferenceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//Ruta para el login y registro
Route::get('/login', function () {
    return view('autentication.login_user');
});

//Ruta para el dashboard
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

//Ruta para el about us
Route::get('/mostrarViaje', function () {
    return view('mostrarViaje');
});

// Ruta para vista registro de usuarios
Route::get('/register', [RegisterController::class, 'index'])->name('register');

//Ruta para enviar datos al servidor
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

//Ruta para login
Route::get('/login', [LoginController::class, 'index'])->name('login');

//Ruta de validacion del login
Route::post('/login', [LoginController::class, 'store'])->name('login.store');

//Ruta mostrar el dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

//Ruta mostrar cuestionario para trazar el viaje
Route::get('/form', [FormController::class, 'index'])->name('form');
// Ruta para almacenar las preferencias de viaje  del usuario
Route::post('/form', [FormController::class, 'store'])->name('form.store');


// Ruta para mostrar el perfil del usario
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

// Ruta para actualizar los datos del perfil del usuario
Route::put('/profile/{id}', [ProfileController::class, 'actualizar'])->name('profile.update');

// Ruta para la imagen del perfil del usuario
Route::post('/profile/image', [ProfileController::class, 'UsuarioImageStore'])->name('profile.imagen');

// Ruta para cerrar sesion
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Ruta para crear las preferencias del usuario
Route::get('/user-preferences/create', [UserPreferenceController::class, 'create'])->name('user-preferences.create');

// Ruta para almacenar las preferencias del usuario
Route::post('/user-preferences/store', [UserPreferenceController::class, 'store'])->name('user-preferences.store');
