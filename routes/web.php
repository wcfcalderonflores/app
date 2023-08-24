<?php

use App\Http\Controllers\MarkingController;
use App\Http\Controllers\personalController;
use App\Http\Controllers\timeCalendar;
use App\Http\Controllers\TimeLogController;
use App\Http\Controllers\timeTable;
use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Prueba\ShowTester;
use Livewire\Livewire;
use App\Http\Controllers\ShowTesterController;

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

Route::get('/', [TimeLogController::class,'timeLogPersonal'])->name('timelog.personal');
Route::get('timelog',[TimeLogController::class,'timeLog'])->name('timelog.extract');
Route::get('timelog-personal',[TimeLogController::class,'timeLogPersonal'])->name('timelog.personal');

Route::get('personal',[personalController::class,'personal'])->name('registro.personal');
Route::get('area',[personalController::class,'area'])->name('registro.area');
Route::get('subArea',[personalController::class,'subArea'])->name('registro.subArea');
Route::get('position',[personalController::class,'position'])->name('registro.position');


Route::get('timetable',[timeTable::class,'index'])->name('timeTable.index');
Route::get('timeCalendar',[timeTable::class,'timeCalendar'])->name('timeTable.timeCalendar');


Route::get('/buscar', [personalController::class, 'buscar'])->name('buscar');

Route::get('timeTab',[ShowTesterController::class,'index'])->name('prueba.index');

Route::get('/prueba/show-tester', ShowTester::class)->name('prueba.showTester');

