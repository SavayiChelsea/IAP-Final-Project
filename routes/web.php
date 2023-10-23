<?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\Auth\LoginController;
    use Illuminate\Support\Facades\Auth;
    use App\Http\Controllers\Auth\RegisterController;
Route::group(['middleware' => 'web'], function () {
    // Route for showing the registration form
    Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [RegisterController::class, 'register']);


    // Login Routes
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);


    Auth::routes(['verify' => true]);


    Route::get('/', function () {
    return view('login');
    });
});
