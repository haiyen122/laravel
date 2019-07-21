
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('input','SumController@sumView')->name('sum-view');
Route::get('student','StudentController@index')->name('student');
Route::get('classes','ClassRoomController@index')->name('classes');
Route::post('sum','SumController@index')->name('sum');
