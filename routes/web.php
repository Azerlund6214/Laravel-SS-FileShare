<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| */


    #### *** File-Share *** ####

    Route::get('/',"FileShareController@index" )->name('index');

    Route::post('/addfile',             'FileShareController@addFile' )->name('addFile');
    Route::get( '/download/{short_url}',"FileShareController@downloadFile"   )->name('downloadFile');
    Route::delete( '/delete/{id}/{admin_token}', 'FileShareController@delete'    )->name('delete');
    Route::get( '/deleteexpiredfiles',  'FileShareController@deleteExpiredFiles'   )->name('deleteExpiredFiles');

    Route::get( '/admin/{pass}', 'FileShareController@index'   )->name('indexAdmin');


    #### *** CRON *** ####



    #######
