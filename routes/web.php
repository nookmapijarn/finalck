<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FinalCheckController;
use App\Http\Controllers\AddFinalStudentController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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

Route::get('/', [FinalCheckController::class, 'index']);
Route::get('/finalcheck', [FinalCheckController::class, 'index'])->name('finalcheck');
Route::post('/finalcheck.search', [FinalCheckController::class, 'search'])->name('finalcheck.search');

Route::middleware('auth', 'verified')->group(function () {
    Route::get('/addfinalstudent', [AddFinalStudentController::class, 'index'])->name('addfinalstudent');
    Route::post('/addfinalstudent.add', [AddFinalStudentController::class, 'add'])->name('addfinalstudent.add');
});

Route::get('login', [AuthenticatedSessionController::class, 'create'])
->name('login');

Route::post('login', [AuthenticatedSessionController::class, 'store']);
Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
->name('logout');