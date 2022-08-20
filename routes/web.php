<?php

use App\Models\FactSkill;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackendController\HomeController;
use App\Http\Controllers\BackendController\AboutController;
use App\Http\Controllers\BackendController\NomanController;
use App\Http\Controllers\BackendController\SkillController;
use App\Http\Controllers\BackendController\backendController;
use App\Http\Controllers\BackendController\PictureController;
use App\Http\Controllers\BackendController\ServiceController;
use App\Http\Controllers\BackendController\EducationController;
use App\Http\Controllers\BackendController\FactSkillController;
use App\Http\Controllers\FrontendController\frontendController;

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


Route::name("frontend.")->group(function(){
    Route::get('/', [frontendController::class, 'index'])->name('home');
});

Auth::routes();

Route::name("backend.")->group(function(){
    Route::group(['middleware' => ['role_or_permission:Super Admin|Admin']], function () {
        Route::get('/dashboard', [backendController::class, 'index'])->name('dashboard');
        Route::resource('/home', HomeController::class)->except(["show"]);
        Route::resource('/about', AboutController::class)->except(["show"]);
        Route::resource('/fact_skill', FactSkillController::class)->except(["show"]);
        Route::resource('/skill', SkillController::class)->except(["show", "edit", "update"]);
        Route::resource('/sumary', NomanController::class)->except(["show",]);
        Route::resource('/education', EducationController::class)->except(["show"]);
        Route::resource('/picture', PictureController::class)->except(["show", "edit", "update"]);
        Route::resource('/service', ServiceController::class)->except(["show", "edit", "update"]);
    });
});

Route::get('/test', [HomeController::class, 'testroute']);
