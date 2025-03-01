<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OnboardingController;

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
    return view('welcome');
});

/** contact and News letter* */
Route::get('/tenant', [AdminController::class,'loadTenant']);
Route::get('/stage', [AdminController::class,'loadStage']);
Route::get('/stage/{id}', [AdminController::class,'loadStageByTenent']);
Route::get('/fieldtype', [AdminController::class,'loadFieldType']);
Route::get('/cards', [AdminController::class,'loadCard']);
Route::get('/cards/{tenantId}', [AdminController::class,'loadCardByTenant']);


/** onbaording * */
Route::get('/onboard/dashboard', [OnboardingController::class,'loadDashabord']);
Route::get('/onboard/{tenant}/{stage}', [OnboardingController::class,'loadStageByTenant']);
Route::post('/validation/{tenant}/{stage}/{card}', [OnboardingController::class,'validateCardByTenant']);
Route::get('/onboard/{tenant}/completed', [OnboardingController::class,'loadOnBoardingCompleted']);

