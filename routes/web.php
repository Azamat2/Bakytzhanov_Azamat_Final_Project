<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Work;
use App\Models\Worker;

use App\Http\Controllers\LangController;
use App\Http\Controllers\AddworkController;
use App\Http\Controllers\AddworkerController;
use App\Http\Controllers\MailController;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/main/lang={lang}', function($lang) {
    App::setlocale($lang);
    return view('main');
})->name('main');

Route::get('/addworker/lang={lang}', function($lang) {
    App::setlocale($lang);
    return view('worker.addworker');
})->name('add-worker');

Route::post('/addworker/lang={lang}', [AddworkerController::class, 'store'])->name('add-worker');

Route::get('/addwork/lang={lang}', function($lang) {
    App::setlocale($lang);
    return view('work.addwork');
})->name('add-work');

Route::post('/addwork/lang={lang}', [AddworkController::class, 'store'])->name('add-work');

Route::get('/allworker/lang={lang}', function($lang) {
    App::setlocale($lang);
    return view('worker.allworker');
})->name('allworker');

Route::get('/allworker/lang={lang}', [AddworkerController::class, 'index']) -> name('allworker');

Route::get('/allwork/lang={lang}', function($lang) {
    App::setlocale($lang);
    return view('work.allwork');
})->name('allwork');

Route::get('/allwork/lang={lang}', [AddworkController::class, 'index']) -> name('allwork');

Route::get('/sendemail/lang={lang}', function($lang) {
    App::setlocale($lang);
    return view('sendemail');
})->name('sendemail');

Route::get('/sendemail/lang={lang}', [MailController::class, 'index']) -> name('sendemail');

Route::post('/sendemail/lang={lang}', [MailController::class, 'send']) -> name('sendemail');