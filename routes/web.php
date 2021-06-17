<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use NotificationChannels\Telegram\TelegramChannel;
use App\Notifications\Telegram;




Auth::routes();



Route::middleware(['role:admin'])->prefix('admin')->group( function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.panel');
    Route::get('/user-edit/{user}', [AdminController::class, 'userEdit'])->name('admin.user.edit');
    Route::get('/user-history', [AdminController::class, 'userHistory'])->name('admin.user.history');
    Route::get('/user-create', [AdminController::class, 'createUser'])->name('admin.user.create');
    Route::post('/user-store', [AdminController::class, 'storeUser'])->name('admin.user.store');
    Route::post('/user-update/{user}', [AdminController::class, 'userUpdate'])->name('admin.user.update');
});





Route::middleware(['role:user'])->prefix('user')->group( function () {
    Route::get('/', [UserController::class, 'index'])->name('user.panel');
    Route::get('edit', [UserController::class, 'edit'])->name('user.edit');
    Route::get('partners', [UserController::class, 'partners'])->name('user.partners');
    Route::get('transfer-insert', [UserController::class, 'transferInsert'])->name('transfer.insert');
    Route::get('transfer', [UserController::class, 'transfer'])->name('user.transfer');
    Route::get('transfer-out', [UserController::class, 'transferOut'])->name('user.transfer.out');
    Route::get('wallets', [UserController::class, 'wallets'])->name('wallets');
    Route::post('/wallets-update/{wallet_info}', [UserController::class, 'walletUpdate'])->name('wallets.update');
    Route::get('create-deposit', [UserController::class, 'createDeposit'])->name('create.deposit');
    Route::get('deposits', [UserController::class, 'deposits'])->name('deposits');
    Route::get('history', [UserController::class, 'history'])->name('history');

    Route::post('/parment-insert',[\App\Http\Controllers\WalletController::class,'replenish'])->name('payment.insert');
    Route::post('/parment-update',[\App\Http\Controllers\WalletController::class,'history'])->name('payment.update');
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





