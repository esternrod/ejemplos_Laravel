<?php
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;

use App\Http\Controllers\UserController;



Route::get('/', function(){
    return view('panel.index'); 
} );    

Route::resource('/productos', ProductoController::class)->names('producto');
Route::controller(UserController::class)->group(function(){
    Route::get('users', 'index')->name('users.index');
    Route::get('users-export', 'export')->name('users.export');
    });
Route::controller(ProductoController::class)->group(function(){
    Route::get('producto-export', 'export')->name('producto.export');
    Route::get('/myPDF','generatePDF')->name('producto.reportPDF'); 
    });