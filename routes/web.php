<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TournamentController;
use App\Http\Controllers\TargetController;
use App\Http\Controllers\AccountController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [UserController::class, 'index'])->middleware(['auth']);
Route::controller(TournamentController::class)->middleware(['auth'])->group(function(){
    Route::get('/tournaments/create',[TournamentController::class,'create'])->name('tournament.create');
    Route::get('/tournaments',[TournamentController::class,'index'])->name('tournament.index');
    Route::post('/tournaments',[TournamentController::class,'store'])->name('tournament.store');
    Route::get('/tournaments/{{ $tournament->id }}/edit',[TournamentController::class,'edit'])->name('tournament.edit');
    Route::delete('/tournaments/{tournament}', [TournamentController::class,'delete'])->name('delete');
    Route::put('/tournaments/{tournament}',[TournamentController::class,'update'])->name('update');
});
Route::controller(TargetController::class)->middleware(['auth'])->group(function(){
    Route::get('/targets/create', [TargetController::class, 'create'])->name('target.create');
    Route::post('/targets',[TargetController::class,'store'])->name('target.store');
});
Route::controller(AccountController::class)->middleware(['auth'])->group(function(){
    Route::get('/accounts/create', [AccountController::class, 'create'])->name('account.create');
    Route::post('/accounts',[AccountController::class,'store'])->name('account.store');
});


require __DIR__.'/auth.php';
