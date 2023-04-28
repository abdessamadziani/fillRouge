<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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
Route::get('job/alljobs',[App\Http\Controllers\JobController::class,'alljobs'])->name('alljobs');

Route::get('/job/{id}/{slug}',[JobController::class,'show'])->name('jobs.show');
Route::get('myjobs',[JobController::class,'myjobs'])->name('myjobs');
Route::get('myjobs/edit/{id}/{slug}',[JobController::class,'edit'])->name('myjob.edit');
Route::post('myjobs/edit/{id}',[JobController::class,'update'])->name('myjob.update');
Route::post('myjobs/delete/{id}',[JobController::class,'destroy'])->name('myjob.delete');
Route::post('/job/apply/{id}',[JobController::class,'apply'])->name('apply.job');
Route::post('/job/desapply/{id}',[JobController::class,'desapply'])->name('desapply.job');

Route::get('/job/applicants',[JobController::class,'applicant'])->name('app');
Route::get('/applicantsby/job/{id}',[JobController::class,'jobapplicants'])->name('job.applicants');


Route::get('job/create',[JobController::class,'create']);
Route::post('job/create',[JobController::class,'store'])->name('job.create');
Route::get('/company/{id}/{slug}',[CompanyController::class,'index'])->name('company.index');
Route::get('/user/profile/pro',[UserController::class,'index'])->name('profile.pro');
Route::post('/user/profile/create',[UserController::class,'store'])->name('profile.create');
Route::post('/user/coverletter',[UserController::class,'coverletter'])->name('coverletter');
Route::post('/user/resume',[UserController::class,'resume'])->name('resume');
Route::view('/recruiter/register','auth.recruiter-register');
Route::post('/recruiter/register',[RecruiterRegisterController::class,'recruiterregistration'])->name('recruiter.register');
Route::get('/company/create',[CompanyController::class,'create'])->name('company.create');
Route::post('/company/create',[CompanyController::class,'store'])->name('companyinfo.create');
Route::post('/company/logo',[CompanyController::class,'updatelogo'])->name('company.logo');
Route::post('/company/cover',[CompanyController::class,'updatecoverimage'])->name('company.cover');
Route::post('/company/name',[CompanyController::class,'updatecompanyname'])->name('companyname.update');

Route::get('/contact-us',[JobController::class,'contact']);
Route::post('/contact-us',[JobController::class,'sendEmail'])->name('contact.send');

Route::get('/admin/dashboard',[AdminController::class,'index'])->name('admin.dashboard');
Route::get('/admin/users',[AdminController::class,'getusers'])->name('admin.users');












Route::get('/mylogin', function () {
    return view('myauth.signin');
});




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'recruiter',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
