<?php

use Illuminate\Support\Facades\Route;


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

Auth::routes();
Route::any('/sendmail', [App\Http\Controllers\UserController::class, 'sendmail'])->name('sendmail');
Route::get('/email/verify',[App\Http\Controllers\VerificationController::class, 'show'])->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', [App\Http\Controllers\VerificationController::class, 'verify'])->name('verification.verify')->middleware(['signed']);
Route::post('/email/resend', [App\Http\Controllers\VerificationController::class, 'resend'])->name('verification.resend');
Route::get('/verify', [App\Http\Controllers\VerificationController::class, 'verifypage']);

// frontend controller
Route::any('about', [App\Http\Controllers\frontendController\aboutController::class, 'About']);
Route::any('/', [App\Http\Controllers\frontendController\indexController::class, 'HomePage']);
Route::any('/contact_form', [App\Http\Controllers\contactController::class, 'contact_form'])->name('contact_form');
// User Controller



Route::group(['middleware' => 'auth'], function() {

Route::any('/dashboard',[App\Http\Controllers\UserController\DashboardController::class, 'Dashboard']);

Route::any('/checkpin', [App\Http\Controllers\UserController\DashboardController::class, 'checkpin'])->name('checkpin');
Route::any('/updatepin', [App\Http\Controllers\UserController\DashboardController::class, 'updatepin'])->name('updatepin');

// User profile
Route::any('/profile',[App\Http\Controllers\UserController\Account\ProfileController::class, 'getprofile']);
Route::any('/editprofile',[App\Http\Controllers\UserController\Account\ProfileController::class, 'editprofile']);
Route::any('/updateprofile',[App\Http\Controllers\UserController\Account\ProfileController::class, 'updateprofile']);
Route::any('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');
Route::any('/passwordreset', [App\Http\Controllers\UserController\Account\PasswordController::class, 'passwordreset'])->name('passwordreset');
Route::post('/changepassword', [App\Http\Controllers\UserController\Account\PasswordController::class, 'changepassword'])->name('changepassword');
Route::get('/referral', [App\Http\Controllers\UserController\Account\ReferralController::class, 'Referral'])->name('referral');


// user transaction pin route
Route::any('/setpin', [App\Http\Controllers\UserController\Account\PinController::class, 'setpin'])->name('setpin');
Route::any('/storepin', [App\Http\Controllers\UserController\Account\PinController::class, 'storepin'])->name('storepin');
// Route::post('/mypin', [App\Http\Controllers\UserController\Account\PinController::class, 'mypin'])->name('mypin');

Route::post('/changepin', [App\Http\Controllers\UserController\Account\PinController::class, 'changepin'])->name('changepin');
Route::any('/pin', [App\Http\Controllers\UserController\Account\PinController::class, 'pin'])->name('pin');

Route::any('/forgetpin', [App\Http\Controllers\UserController\Account\PinController::class, 'forgetpin'])->name('forgetpin');
Route::post('/confirmpin', [App\Http\Controllers\UserController\Account\PinController::class, 'confirmpin'])->name('confirmpin');
Route::any('/pinreset/{slug}', [App\Http\Controllers\UserController\Account\PinController::class, 'pinreset'])->name('pinreset');
Route::any('/resetpin', [App\Http\Controllers\UserController\Account\Account\PinController::class, 'resetpin'])->name('resetpin');

// get airtime route
Route::any('/buyairtime', [App\Http\Controllers\UserController\Transaction\AirtimeController::class, 'getbuyairtime'])->name('buyairtime');
// buy airtime
Route::post('/postairtime', [App\Http\Controllers\UserController\Transaction\AirtimeController::class, 'buyairtime'])->name('postairtime');

// Route::any('/fetchairtime2', [App\Http\Controllers\UserController\Transaction\AirtimeController::class, 'fetchairtime2'])->name('fetchairtime2');
// Route::any('/getdiscount2', [App\Http\Controllers\UserController\Transaction\AirtimeController::class, 'getdiscount2'])->name('getdiscount2');
//Route::post('/buyairtime2', [App\Http\Controllers\UserController\Transaction\AirtimeController::class, 'buyairtime2'])->name('buyairtime2');

// electricity route
Route::any('/electricity', [App\Http\Controllers\UserController\Transaction\ElectricityController::class, 'electricity'])->name('electricity');
Route::post('/postelectricity', [App\Http\Controllers\UserController\Transaction\ElectricityController::class, 'postelectricity'])->name('postelectricity');
Route::any('/electricitydetails', [App\Http\Controllers\UserController\Transaction\ElectricityController::class, 'getElectricityDetails'])->name('electricitydetails');

// buydata route
Route::any('/buydata', [App\Http\Controllers\UserController\Transaction\DataController::class, 'getbuydata'])->name('getbuydata');
Route::post('/buy_data', [App\Http\Controllers\UserController\Transaction\DataController::class, 'buydata'])->name('buydata');
Route::post('/dataprice', [App\Http\Controllers\UserController\Transaction\DataController::class, 'dataprice'])->name('dataprice');

// Cable route 
Route::any('/cable', [App\Http\Controllers\UserController\Transaction\CableController::class, 'cable'])->name('cable');
Route::any('/cableprices', [App\Http\Controllers\UserController\Transaction\CableController::class, 'getcableprices'])->name('cableprices');

Route::any('/getCableDetails', [App\Http\Controllers\UserController\Transaction\CableController::class, 'getCableDetails'])->name('getCableDetails');

// exam route
Route::any('/exam', [App\Http\Controllers\UserController\Transaction\ExamController::class, 'exam'])->name('exam');
Route::any('/examprice', [App\Http\Controllers\UserController\Transaction\ExamController::class, 'Examprices'])->name('examprice');
Route::post('/buy_pin', [App\Http\Controllers\UserController\Transaction\ExamController::class, 'buy_pin'])->name('buy_pin');



// notification
Route::any('/notifications', [App\Http\Controllers\UserController\NotificationController::class, 'Notification'])->name('notification');


// fundwallet
// Route::post('/wallet/fund/paystack', [App\Http\Controllers\Main\Wallet\PaystackController::class, 'redirectToGateway'])->name('wallet.paystack');

Route::any('/fund-wallet', [App\Http\Controllers\UserController\Wallet\FundWalletController::class, 'fundwallet'])->name('fundwallet');
Route::any('/manual_funding', [App\Http\Controllers\UserController\Wallet\FundWalletController::class, 'manualfunding'])->name('manualfunding');

Route::post('/pay', [App\Http\Controllers\UserController\Wallet\PaymentController::class, 'redirectToGateway'])->name('pay');
Route::get('/payment/callback', [App\Http\Controllers\UserController\Wallet\PaymentController::class, 'handleGatewayCallback']);

});




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

/*
|--------------------------------------------------------------------------
| Webhooks
|--------------------------------------------------------------------------
|
*/
Route::group(['prefix' => 'webhooks'], function () {

    
    Route::post('paystack/webhook', [App\Http\Controllers\UserController\Webhooks\PaystackWebhook::class, 'handleWebhook']);
});
