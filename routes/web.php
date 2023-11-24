<?php

use App\Http\Controllers\ParkingInstanceController;
use App\Http\Controllers\ParkingInvoiceController;
use App\Http\Controllers\ParkingSpaceController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::group(['middleware' => 'auth'], function () {
    Route::resource('users', \App\Http\Controllers\UsersController::class);
});

Route::get('/parkinglot',[ ParkingSpaceController::class , 'show'])->name('parkinglot');

// Route::get('/invoices/{user}',[ ParkingInvoiceController::class , 'show'])->name('invoices');

// Route::get('/user/{id}', function ($id) {
//     $user = User::with('parkingInvoices')->find($id);
    
//     // Access user data and related posts
//     return response()->json($user);
// })->name('invoices');

Route::get('/user/{id}', [UsersController::class, 'getUserWithRelatedData'])->name('invoices');
Route::get('/instance',[ParkingInstanceController::class, 'index'])->name('admin.instance');
Route::get('/reservation',[ReservationController::class, 'index'])->name('admin.reservation');
Route::post('/instance/create',[ParkingInstanceController::class, 'store'])->name('admin.instance.store');
Route::post('/instance/update',[ParkingInstanceController::class, 'update'])->name('admin.instance.update');
Route::post('/parkinglot/reserve-parking-spaces', [ReservationController::class, 'reserveParkingSpaces'])->name('reserve.parking.spaces');