<?php

use App\Http\Controllers\Api\AboutController;
use App\Http\Controllers\Api\AwardController;
use App\Http\Controllers\Api\EducationController;
use App\Http\Controllers\Api\ExperienceController;
use App\Http\Controllers\Api\PortfolioController;
use App\Http\Controllers\Api\SkillController;
use App\Http\Controllers\home\HomeController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('about', [AboutController::class, 'index']);
Route::get('skill', [SkillController::class, 'index']);
Route::get('education', [EducationController::class, 'index']);
Route::get('experience', [ExperienceController::class, 'index']);
Route::get('portfolio', [PortfolioController::class, 'index']);
Route::get('award', [AwardController::class, 'index']);
Route::post('midtrans-callback', [HomeController::class, 'callback']);
