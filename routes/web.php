<?php

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

Auth::routes();
Route::group(['middleware'=>'auth'],function(){
    Route::get('/', 'DashBoardController@index')->name('index');
    Route::get('details/{id?}','DashBoardController@details')->name('details');
 
    Route::group(['middleware'=> ['role:admin'] , 'as'=>'admin.', 'prefix'=>'admin', 'namespace' => 'Admin'],function(){
        Route::get('/', 'DashBoardController@index')->name('index');
        Route::get('details/{id?}','DashBoardController@details')->name('details');
        Route::get('/jobs','JobsController@index')->name('jobs');
        
        Route::get('/jobs/create','JobsController@create')->name('create');
        Route::post('/jobs/store','JobsController@store')->name('store');
        Route::get('/jobs/edit/{id?}','JobsController@edit')->name('edit');
        Route::put('/jobs/update/{id?}','JobsController@update')->name('update');
        //Route::destroy('/jobs/delete/{id?}','JobsController@destroy')->name('delete');
      
        Route::get('/{id}/assignjobs','AssignController@index')->name('assignjobs');
        Route::get('/candidateDetails/{id?}','AssignController@details')->name('candidateDetails');
        Route::get('/Summery/{id?}','AssignController@summery')->name('summery');
          
        Route::get('/reports','ReportsController@index')->name('reports');  
    
    });


Route::get('/resumes','MainController@resume')->name('resumes');
Route::POST('/resumes','MainController@resumeupload')->name('resume');
Route::get('searching','MainController@search')->name('searching');
Route::POST('/search','MainController@searchresult')->name('search');

Route::get('/jobs','JobsController@index')->name('jobs');
Route::get('/jobs/create/{id?}','JobsController@create')->name('jobs.create');
Route::post('/jobs/store/{id}','JobsController@store')->name('jobs.store');
Route::get('/jobs/All','JobsController@jobs')->name('jobs.Alljobs');
Route::get('candidateDetails/{id?}','JobsController@details')->name('jobs.details');
//Route::get('/home', 'HomeController@index')->name('home');

});