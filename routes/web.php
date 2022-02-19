<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SendEmailController;

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
    // return view('welcome');
    return view('qrCode');
});

Route::get('qr-code-g', function () {

    // \QrCode::size(500)
    //         ->format('png')
    //         ->generate('ItSolutionStuff.com', public_path('images/qrcode.png'));

  return view('qrCode');

});

Route::get('receive_resume', function () {
    return view('email_form');
});

Route::post('send_mail_to_visitor', [SendEmailController::class, 'send_mail_to_visitor']);

// Route::get('test', fn () => phpinfo());
