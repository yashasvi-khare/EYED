<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\AppointmentController; 
use App\Http\Controllers\ContactController;

Route::view('/', 'index')->name('index');
Route::get('set-locale',[DoctorController::class,'setLocale'])->name('set-locale');

Route::view('about','about')->name('about');

Route::get('ayushmaan',function () {
    return view('ayushmaan');
})->name('ayushmaan');

Route::get('blog',function () {
    return view('blog');
})->name('blog');
Route::get('contact',function () {
    return view('contact');
})->name('contact');
Route::get('treatments',function () {
    return view('treatments');
})->name('treatments');
Route::get('service',function () {
    return view('service');
})->name('service');

Route::get('login', [AppointmentController::class, 'index'])->name('login');
Route::get('register', [DoctorController::class, 'register'])->name('register');
Route::post('register-user', [DoctorController::class, 'register_user'])->name('register-user');
Route::get('login', function(){
return view('login');
})->name('login');
Route::get('dashboard', function(){
    return view('dashboard');
    })->name('dashboard');
Route::post('login-user', [DoctorController::class, 'login_user'])->name('login-user');

Route::post('store', [AppointmentController::class, 'store'])->name('store');
Route::post('index', [AppointmentController::class, 'store'])->name('store');
Route::post('/contact', [ContactController::class, 'store']);