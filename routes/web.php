<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\SubAdminController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\detableController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\DownloadController;
use Illuminate\Support\Facades\Storage;


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

Route::get('/register',[AuthController::class,'loadRegister']);
Route::post('/register',[AuthController::class,'register'])->name('register');
Route::get('/login',function(){
    return redirect('/');
});
Route::get('/',[AuthController::class,'loadLogin']);
Route::post('/login',[AuthController::class,'login'])->name('login');
Route::get('/logout',[AuthController::class,'logout']);

// ********** Super Admin Routes *********
Route::group(['prefix' => 'super-admin','middleware'=>['web','isSuperAdmin']],function(){
    Route::get('/dashboard',[SuperAdminController::class,'dashboard']);

    Route::get('/users',[SuperAdminController::class,'users'])->name('superAdminUsers');
    Route::get('/manage-role',[SuperAdminController::class,'manageRole'])->name('manageRole');
    Route::post('/update-role',[SuperAdminController::class,'updateRole'])->name('updateRole');
});

// ********** Sub Admin Routes *********
Route::group(['prefix' => 'sub-admin','middleware'=>['web','isSubAdmin']],function(){
    Route::get('/dashboard',[SubAdminController::class,'dashboard']);
});

// ********** Admin Routes *********
Route::group(['prefix' => 'admin','middleware'=>['web','isAdmin']],function(){
    Route::get('/dashboard',[AdminController::class,'dashboard']);
});

// ********** User Routes *********
Route::group(['middleware'=>['web','isUser']],function(){
    Route::get('/dashboard',[UserController::class,'dashboard']);
});
// ********** User form order Routes *********

Route::post('/submit-order', [OrderController::class, 'submitOrder']);


// web.php
Route::get('/commande', function () {
    return view('user/commande');
})->name('commande');


//-------------------------------------


// routes/web.php



Route::get('/commande', [OrderController::class, 'afficherCommandes'])->name('commande');

Route::post('/submit-commande', [CommandeController::class, 'store'])->name('submit.commande');

Route::get('/sdc', function () {
    return view('admin/sdc');
})->name('sdc');





// routes/web.php


Route::get('admin/table', [TableController::class, 'showTable'])->name('showTable');

// routes/web.php



//Route::get('/download-pdf/{pdfPath}', [DownloadController::class, 'downloadPDF'])->name('download.pdf');
//Route::get('/download-pdf/{pdfPath}', [DownloadController::class, 'downloadPDF'])->name('download.pdf');
// routes/web.php



//Route::get('/telecharger-fichier', [DownloadController::class, 'downloadFile'])->name('download.pdf');
// routes/web.php



//Route::get('/download-pdf', [DownloadController::class, 'downloadFile'])->name('download.pdf');




//Route::get('/download-pdf/{pdfPath}', 'DownloadController@downloadPDF')->name('download.pdf');

// routes/web.php or routes/api.php



//Route::get('/download-pdf', [DownloadController::class, 'downloadFile'])->name('download.pdf');
// routes/web.php or routes/api.php


//Route::get('/download-pdf', ['DownloadController@downloadFile'])->name('download.pdf');

//Route::get('/download-pdf','DownloadController@downloadFile')->name('download.pdf');

//Route::get('/download-pdf/{pdf_path}', [TableController::class, 'downloadPDF'])->name('download-pdf');
//Route::get('/download/{pdf_path}', [TableController::class, 'downloadPDF'])->name('download-pdf');


Route::get('/download/{filename}', function ($filename) {
    $filePath = storage_path("app/public/{$filename}");

    if (file_exists($filePath)) {
        return response()->download($filePath);
    } else {
        return response()->json(['error' => 'File not found.'], 404);
    }
})->where('filename', '(.*)');






Route::get('super-admin/table', [detableController::class, 'showTable'])->name('showTable');
