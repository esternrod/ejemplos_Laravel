<?php
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;

use App\Http\Controllers\UserController;


Route::get('/myPDF', [PDFController::class, 'generatePDF'])->name('myPDF');
Route::get('/productos/myPDF', [ProductoController::class,
'generatePDF'])->name('producto.reportPDF');
Route::get('/', function(){
    return view('panel.index'); 
} );    

Route::resource('/productos', ProductoController::class)->names('producto');
Route::controller(UserController::class)->group(function(){
    Route::get('users', 'index');
    Route::get('users-export', 'export')->name('users.export');
    });
