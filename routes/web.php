<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PagesController;

// About Controllers
// use App\Http\Controllers\Students;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\MatkulController;
use App\Http\Controllers\AdstudentsController;
use App\Http\Controllers\AdmatkulsController;
use App\Http\Controllers\AdpegasController;
use App\Http\Controllers\AdosensController;
use App\Http\Controllers\AdfaksController;
use App\Http\Controllers\AdprodisController;
use App\Http\Controllers\AdruangsController;
use App\Http\Controllers\AdkhsController;
use App\Http\Controllers\AdkrsController;
use App\Http\Controllers\AdgedungsController;
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

Route::get('/', [PagesController::class, 'home']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/tampilan', [PagesController::class, 'tampilan']);
Route::get('/login', [PagesController::class, 'login']);
Route::get('/level', [PagesController::class, 'level']);


//-------------------------USER AREA----------------------------------------------//
// Students
Route::get('/students', [StudentsController::class, 'index']);
Route::get('/students/{students}', [StudentsController::class, 'show']);
// Matkul
Route::get('/matkul', [MatkulController::class, 'index']);
Route::get('/matkul/{matkul}', [MatkulController::class, 'show']);



//-------------------------ADMIN AREA----------------------------------------------//
// Students
Route::get('/admins', [AdstudentsController::class, 'index']);
Route::get('/admins/create', [AdstudentsController::class, 'create']);
Route::get('/admins/{adstudents}', [AdstudentsController::class, 'show']);
Route::post('/admins', [AdstudentsController::class, 'store']);
Route::delete('/admins/{adstudents}', [AdstudentsController::class, 'destroy']);
Route::get('/admins/{adstudents}/edit', [AdstudentsController::class, 'edit']);
Route::patch('/admins/{adstudents}', [AdstudentsController::class, 'update']);

// Matkuls
Route::get('/admatkuls', [AdmatkulsController::class, 'index']);
Route::get('/admatkuls/create', [AdmatkulsController::class, 'create']);
Route::get('/admatkuls/{admatkuls}', [AdmatkulsController::class, 'show']);
Route::post('/admatkuls', [AdmatkulsController::class, 'store']);
Route::delete('/admatkuls/{admatkuls}', [AdmatkulsController::class, 'destroy']);
Route::get('/admatkuls/{admatkuls}/edit', [AdmatkulsController::class, 'edit']);
Route::patch('/admatkuls/{admatkuls}', [AdmatkulsController::class, 'update']);

// Pegawai
Route::get('/adpegas', [AdpegasController::class, 'index']);
Route::get('/adpegas/create', [AdpegasController::class, 'create']);
Route::get('/adpegas/{adpegas}', [AdpegasController::class, 'show']);
Route::post('/adpegas', [AdpegasController::class, 'store']);
Route::delete('/adpegas/{adpegas}', [AdpegasController::class, 'destroy']);
Route::get('/adpegas/{adpegas}/edit', [AdpegasController::class, 'edit']);
Route::patch('/adpegas/{adpegas}', [AdpegasController::class, 'update']);

// Dosen
Route::get('/adosens', [AdosensController::class, 'index']);
Route::get('/adosens/create', [AdosensController::class, 'create']);
Route::get('/adosens/{adosens}', [AdosensController::class, 'show']);
Route::post('/adosens', [AdosensController::class, 'store']);
Route::delete('/adosens/{adosens}', [AdosensController::class, 'destroy']);
Route::get('/adosens/{adosens}/edit', [AdosensController::class, 'edit']);
Route::patch('/adosens/{adosens}', [AdosensController::class, 'update']);

// Fakultas
Route::get('/adfaks', [AdfaksController::class, 'index']);
Route::get('/adfaks/create', [AdfaksController::class, 'create']);
Route::get('/adfaks/{adfaks}', [AdfaksController::class, 'show']);
Route::post('/adfaks', [AdfaksController::class, 'store']);
Route::delete('/adfaks/{adfaks}', [AdfaksController::class, 'destroy']);
Route::get('/adfaks/{adfaks}/edit', [AdfaksController::class, 'edit']);
Route::patch('/adfaks/{adfaks}', [AdfaksController::class, 'update']);

// Program Studi
Route::get('/adprodis', [AdprodisController::class, 'index']);
Route::get('/adprodis/create', [AdprodisController::class, 'create']);
Route::get('/adprodis/{adprodis}', [AdprodisController::class, 'show']);
Route::post('/adprodis', [AdprodisController::class, 'store']);
Route::delete('/adprodis/{adprodis}', [AdprodisController::class, 'destroy']);
Route::get('/adprodis/{adprodis}/edit', [AdprodisController::class, 'edit']);
Route::patch('/adprodis/{adprodis}', [AdprodisController::class, 'update']);

// Ruang
Route::get('/adruangs', [AdruangsController::class, 'index']);
Route::get('/adruangs/create', [AdruangsController::class, 'create']);
Route::get('/adruangs/{adruangs}', [AdruangsController::class, 'show']);
Route::post('/adruangs', [AdruangsController::class, 'store']);
Route::delete('/adruangs/{adruangs}', [AdruangsController::class, 'destroy']);
Route::get('/adruangs/{adruangs}/edit', [AdruangsController::class, 'edit']);
Route::patch('/adruangs/{adruangs}', [AdruangsController::class, 'update']);

// KHS
Route::get('/adkhs', [AdkhsController::class, 'index']);
Route::get('/adkhs/create', [AdkhsController::class, 'create']);
Route::get('/adkhs/{adkhs}', [AdkhsController::class, 'show']);
Route::post('/adkhs', [AdkhsController::class, 'store']);
Route::delete('/adkhs/{adkhs}', [AdkhsController::class, 'destroy']);
Route::get('/adkhs/{adkhs}/edit', [AdkhsController::class, 'edit']);
Route::patch('/adkhs/{adkhs}', [AdkhsController::class, 'update']);

// KRS
Route::get('/adkrs', [AdkrsController::class, 'index']);
Route::get('/adkrs/create', [AdkrsController::class, 'create']);
Route::get('/adkrs/{adkrs}', [AdkrsController::class, 'show']);
Route::post('/adkrs', [AdkrsController::class, 'store']);
Route::delete('/adkrs/{adkrs}', [AdkrsController::class, 'destroy']);
Route::get('/adkrs/{adkrs}/edit', [AdkrsController::class, 'edit']);
Route::patch('/adkrs/{adkrs}', [AdkrsController::class, 'update']);

// Gedung
Route::get('/adgedungs', [AdgedungsController::class, 'index']);
Route::get('/adgedungs/create', [AdgedungsController::class, 'create']);
Route::get('/adgedungs/{adgedungs}', [AdgedungsController::class, 'show']);
Route::post('/adgedungs', [AdgedungsController::class, 'store']);
Route::delete('/adgedungs/{adgedungs}', [AdgedungsController::class, 'destroy']);
Route::get('/adgedungs/{adgedungs}/edit', [AdgedungsController::class, 'edit']);
Route::patch('/adgedungs/{adgedungs}', [AdgedungsController::class, 'update']);