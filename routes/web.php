<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PayParkingController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ParkingSpaceController;
use App\Http\Controllers\ParkingInvoiceController;
use App\Http\Controllers\ParkingInstanceController;
use Illuminate\Routing\Controllers\payments\mpesa\MPESAController;

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
    
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/services', [DashboardController::class, 'services'])->name('services');


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

Route::get('/user/invoices', [UsersController::class, 'getUserWithRelatedData'])->name('invoices');
Route::get('/user/payments', [UsersController::class, 'getRelatedData'])->name('payments');
Route::get('/instance',[ParkingInstanceController::class, 'index'])->name('admin.instance');
Route::get('/reservation',[ReservationController::class, 'index'])->name('admin.reservation');
Route::post('/instance/create',[ParkingInstanceController::class, 'store'])->name('admin.instance.store');
Route::post('/instance/update',[ParkingInstanceController::class, 'update'])->name('admin.instance.update');
Route::post('/parkinglot/reserve-parking-spaces', [ReservationController::class, 'reserveParkingSpaces'])->name('reserve.parking.spaces');

Route::get('/user/generate-invoice-pdf', [PDFController::class, 'generateInvoice'])->name('user.generate.invoice.pdf');
Route::get('/user/generate-payment-pdf', [PDFController::class, 'generatePayment'])->name('user.generate.payment.pdf');


//Route::get('/pay',[MPESAController::class, 'stk'])->name('pay-stk');

Route::post('/v1/mpesatest/stk/push', [MPESAController::class, 'STKPush'])->name('pay-stk');

Route::post('v1/confirm', [MPESAController::class, 'STKConfirm'])->name('mpesa.confirm');


Route::get('/admin/pay-parking', [PayParkingController::class, 'index'])->name('admin.pay-parking');


Route::post('/mpesa/stk-push', [MPESAController::class, 'STKPush'])->name('mpesa.stk-push');

Route::post('/mpesa/stk-confirm', [MPESAController::class, 'STKConfirm'])->name('mpesa.stk-confirm');