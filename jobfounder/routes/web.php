<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RecruiterRegisterController;



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

Route::get('/',[App\Http\Controllers\JobController::class,'index']);

Route::get('/job/{id}/{slug}',[JobController::class,'show'])->name('jobs.show');
Route::get('job/create',[JobController::class,'create']);
Route::get('/company/{id}/{slug}',[CompanyController::class,'index'])->name('company.index');
Route::get('/user/profile/pro',[UserController::class,'index']);
Route::post('/user/profile/create',[UserController::class,'store'])->name('profile.create');
Route::post('/user/coverletter',[UserController::class,'coverletter'])->name('coverletter');
Route::post('/user/resume',[UserController::class,'resume'])->name('resume');
Route::view('/recruiter/register','auth.recruiter-register');
Route::post('/recruiter/register',[RecruiterRegisterController::class,'recruiterregistration'])->name('recruiter.register');
Route::get('/company/create',[CompanyController::class,'create']);
Route::post('/company/create',[CompanyController::class,'store'])->name('companyinfo.create');
Route::post('/company/logo',[CompanyController::class,'updatelogo'])->name('company.logo');
Route::post('/company/cover',[CompanyController::class,'updatecoverimage'])->name('company.cover');










Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
