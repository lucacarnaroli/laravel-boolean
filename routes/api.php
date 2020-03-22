<?php

use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// uso namespace per predere il controller(dello stesso nome) dentro la cartella Api(http), in caso non avessi utilizzato il namespace mi avrebbe preso un altro controllor con lo stesso nome.
// da terminale per creare una cartella con file dentro si fa: es. php artisan make:controller Api/StudentController
Route::namespace('Api')->group(function () {
    Route::post('/students/genders','StudentController@gender');
});
