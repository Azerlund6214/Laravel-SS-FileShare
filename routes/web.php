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
    Route::get('/',              "FileShareController@index"   )->name('index');

    Route::get('/download/{short_url}',  "FileShareController@downloadFile"   )->name('downloadFile');


    Route::get( '/admin/{pass}', 'FileShareController@index'   )->name('indexAdmin');
    Route::post('/addfile',      'FileShareController@addFile' )->name('addFile');
    Route::delete( '/delete/{id}/{admin_token}',   'FileShareController@delete'    )->name('delete');


    #### *** Tasker *** ####
	/*
    Route::get( 'tasks',             'TasksController@index'   )->name('tasks.index');
	Route::get( 'tasks/create',      'TasksController@create'  )->name('tasks.create');
	Route::post('tasks/store',       'TasksController@store'   )->name('tasks.store');
	Route::get( 'tasks/{id}/edit',   'TasksController@edit'    )->name('tasks.edit');
	Route::put( 'tasks/{id}/update', 'TasksController@update'  )->name('tasks.update');
	Route::get( 'tasks/{id}/show',   'TasksController@show'    )->name('tasks.show');
	Route::delete( 'tasks/{id}/delete',   'TasksController@delete'    )->name('tasks.delete');
    # Route::resource('tasks', 'TasksController'); # Авто маршуруты
	*/

    #### *** CRON *** ####



    #######
