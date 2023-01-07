<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\ReportController;
use GuzzleHttp\Middleware;

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

Route::group(['middleware' => 'auth'], function(){

    Route::resource('categories',CategoryController::class)->names('categories');
    Route::resource('providers',ProviderController::class)->names('providers');
    Route::resource('users',UserController::class)->names('users');
    Route::resource('roles',RoleController::class)->names('roles');
    Route::resource('products',ProductController::class)->names('products');
    Route::resource('clients',ClientController::class)->names('clients');
    Route::resource('purchases',PurchaseController::class)->names('purchases');
    Route::resource('sales',SaleController::class)->names('sales');

    Route::get('purchases/pdf/{purchase}',[PurchaseController::class,'pdf'])->name('purchases.pdf');
    Route::get('sales/pdf/{sale}',[SaleController::class,'pdf'])->name('sales.pdf');

    Route::get('sales/print/{sale}',[SaleController::class,'print'])->name('sales.print');

    Route::get('purchases/upload/{purchase}',[PurchaseController::class,'upload'])->name('upload.purchase');

    Route::get('change_status/products/{product}', [ProductController::class,'change_status'])->name('change.status.products');
    Route::get('change_status/purchases/{purchase}', [PurchaseController::class,'change_status'])->name('change.status.purchases');
    Route::get('change_status/sales/{sale}', [SaleController::class,'change_status'])->name('change.status.sales');

    Route::get('sale/reports_day', [ReportController::class,'reports_day'])->name('reports.day');
    Route::get('sale/reports_date', [ReportController::class,'reports_date'])->name('reports.date');

    Route::post('sale/report_results', [ReportController::class,'report_results'])->name('report.results');

    Route::get('purchase/reports_day', [ReportController::class,'rday'])->name('rday.day');
    Route::get('purchase/reports_date', [ReportController::class,'rdate'])->name('rdate.date');
    Route::post('purchase/report_results', [ReportController::class,'rresults'])->name('preport.results');

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
