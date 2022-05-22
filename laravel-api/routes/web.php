<?php

use App\Http\Controllers\StudyController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [StudyController::class, 'index'])->name("study.index");
Route::get('/create', [StudyController::class, 'create'])->name("study.create");
Route::post('/store', [StudyController::class, 'store'])->name("study.store");
Route::get('/update/{id}', [StudyController::class, 'edit'])->name("study.edit");
Route::put('/update/{id}', [StudyController::class, 'update'])->name("study.update");
Route::get('/study/{id}/destroy', [StudyController::class, 'destroy'])->name("study.destroy");
