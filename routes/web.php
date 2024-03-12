<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProudectController;
use App\Http\Controllers\OrderController;

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
Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
	/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    Route::get('/', function () {
        return view('welcome');
    });
    
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');
    
    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

   
    // route proudect
    Route::get('proudect',[ProudectController::class ,'index'])->name('proudect.index');
    Route::get('proudect/create',[ProudectController::class ,'create'])->name('proudect.create');
    Route::post('proudect/store',[ProudectController::class ,'store'])->name('proudect.store');
    Route::get('proudect/edit/{id}',[ProudectController::class ,'edit'])->name('proudect.edit');
    Route::post('proudect/update/{id}',[ProudectController::class ,'update'])->name('proudect.update');
    Route::get('proudect/show/{id}',[ProudectController::class ,'show'])->name('proudect.show');
    Route::get('proudect/destroy/{id}',[ProudectController::class ,'destroy'])->name('proudect.destroy');
    Route::get('new',[ProudectController::class ,'new'])->name('new');


    // route order
    Route::get('order',[OrderController::class ,'index'])->name('order.index');
    Route::get('order/all',[OrderController::class ,'order'])->name('order.allorder');
    Route::get('order/create/{id}',[OrderController::class ,'create'])->name('order.create');
    Route::post('order/store/{id}',[OrderController::class ,'store'])->name('order.store');
    Route::get('order/edit/{id}',[OrderController::class ,'edit'])->name('order.edit');
    Route::post('order/update/{id}',[OrderController::class ,'update'])->name('order.update');
    Route::get('order/show/{id}',[OrderController::class ,'show'])->name('order.show');
    Route::get('order/destroy/{id}',[OrderController::class ,'destroy'])->name('order.destroy');    
});


require __DIR__.'/auth.php';
