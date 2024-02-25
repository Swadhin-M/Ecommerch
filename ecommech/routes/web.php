<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatagoryController;
use App\Http\Controllers\SubcatagoryController;
use App\Http\Controllers\ProdoctController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\HadingController;
use App\Http\Controllers\DiscountController;
use Illuminate\Support\Facades\Route;


// AuthController
Route::get('/home', [AuthController::class, 'index']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


// HomeController
Route::get('/', [HomeController::class, 'index']);
Route::get('/dashboard', [HomeController::class, 'show']);
Route::get('/user', [HomeController::class, 'view']);




// CatagoryController
Route::get('/catagory/create', [CatagoryController::class, 'index']);
Route::get('/catagory/list', [CatagoryController::class, 'list'])->name('catagory.list');
Route::post('/catagory/store', [CatagoryController::class, 'store']);
Route::get('/catagory/delete/{id?}', [CatagoryController::class, 'delete']);
Route::get('/catagory/edit/{id?}', [CatagoryController::class, 'show']);
Route::post('/catagory/update/{id?}', [CatagoryController::class, 'upload']);

// SubcatagoryController

Route::get('/subcatagory/create', [SubcatagoryController::class, 'index']);
Route::get('/subcatagory/list', [SubcatagoryController::class, 'list'])->name('Subcatagory.list');
Route::post('/subcatagory/store', [SubcatagoryController::class, 'store']);
Route::get('/subcatagory/delete/{id?}', [SubcatagoryController::class, 'delete']);
Route::get('/subcatagory/edit/{id?}', [SubcatagoryController::class, 'show']);
Route::post('/subcatagory/update/{id?}', [SubcatagoryController::class, 'upload']);

// ProdoctController



Route::get('/prodoct/create', [ProdoctController::class, 'index']);
Route::get('/prodoct/list', [ProdoctController::class, 'list'])->name('Prodoct.list');
Route::post('/prodoct/store', [ProdoctController::class, 'store']);
Route::get('/prodoct/delete/{id?}', [ProdoctController::class, 'delete']);
Route::get('/prodoct/edit/{id?}', [ProdoctController::class, 'show']);
Route::post('/prodoct/update/{id?}', [ProdoctController::class, 'upload']);


// SettingController


Route::get('/setting/create', [SettingController::class, 'index']);
Route::get('/setting/list', [SettingController::class, 'list'])->name('setting.list');
Route::post('/setting/store', [SettingController::class, 'store']);
Route::get('/setting/delete/{id?}', [SettingController::class, 'delete']);
Route::get('/setting/edit/{id?}', [SettingController::class, 'show']);
Route::post('/setting/update/{id?}', [SettingController::class, 'upload']);

// HadingController

Route::get('/heading/create', [HadingController::class, 'index']);
Route::get('/heading/list', [HadingController::class, 'create'])->name('setting.list');
Route::post('/heading/store', [HadingController::class, 'store']);
Route::get('/heading/delete/{id?}', [HadingController::class, 'destroy']);
Route::get('/heading/edit/{id?}', [HadingController::class, 'edit']);
Route::post('/heading/update/{id?}', [HadingController::class, 'update']);

// DiscountController

Route::get('/discount/create', [DiscountController::class, 'index']);
Route::get('/discount/list', [DiscountController::class, 'create'])->name('setting.list');
Route::post('/discount/store', [DiscountController::class, 'store']);
Route::get('/discount/delete/{id?}', [DiscountController::class, 'destroy']);
Route::get('/discount/edit/{id?}', [DiscountController::class, 'edit']);
Route::post('/discount/update/{id?}', [DiscountController::class, 'update']);
