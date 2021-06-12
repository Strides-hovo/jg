<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use NotificationChannels\Telegram\TelegramChannel;
use App\Notifications\Telegram;




Auth::routes();



Route::middleware(['role:admin'])->prefix('admin')->group( function () {

});



Route::middleware(['role:user'])->prefix('user')->group( function () {
    Route::get('/', [UserController::class, 'index'])->name('user.panel');
    Route::get('edit', [UserController::class, 'edit'])->name('user.edit');
    Route::get('partners', [UserController::class, 'partners'])->name('user.partners');
    Route::get('transfer-insert', [UserController::class, 'transferInsert'])->name('transfer.insert');
    Route::get('transfer', [UserController::class, 'transfer'])->name('user.transfer');
    Route::get('transfer-out', [UserController::class, 'transferOut'])->name('user.transfer.out');
    Route::get('wallets', [UserController::class, 'wallets'])->name('wallets');
    Route::get('create-deposit', [UserController::class, 'createDeposit'])->name('create.deposit');
    Route::get('deposits', [UserController::class, 'deposits'])->name('deposits');
    Route::get('history', [UserController::class, 'history'])->name('history');
});


Route::middleware(['role:manager'])->prefix('manager')->group( function () {

});


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');

Route::get('/cache', function() {
    Artisan::call('cache:clear');
    Artisan::call('route:cache');
    Artisan::call('config:cache');
    Artisan::call('view:cache');

    echo("Cache Clear All");
});



Route::post('/register', [UserController::class, 'create'])->name('user.register');

Route::get('/telegram/{id}/{status}', [UserController::class, 'telegramStatus'])->name('user.telegram.status');





