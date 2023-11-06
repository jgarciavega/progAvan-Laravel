

<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});



use App\Http\Controllers\SaludoController;

Route::get('/saludo/{name}', [SaludoController::class, 'saludar']) ->where('name', '[A-Za-z]+');

Route::get('/suma/{num1}/{num2}', [SaludoController::class, 'sumar'])->where('num2','[0-9]+');

Route::get('/resta/{num1}/{num2}', [SaludoController::class, 'restar'])->where('num2','[0-9]+');

Route::get('/multiplica/{num1}/{num2}', [SaludoController::class, 'multiplicar'])->where('num2','[0-9]+');

Route::get('/divide/{num1}/{num2}', [SaludoController::class, 'dividir'])->where('num2','[0-9]+');



use App\Http\Controllers\pruebaBlade;
Route::get('/user', [pruebaBlade::class, 'user']);