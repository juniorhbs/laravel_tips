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

Route::get('listagem-usuario', 'UserController@listUser');

Route::group(['namespace' => 'Form'], function(){
    /*
 * VERBO GET
 */
    Route::get('/', 'TestController@listAllUsers')->name('users.listAll');
    Route::get('usuarios/novo', 'TestController@formAddUser')->name('users.formAddUser');
    Route::get('usuarios/editar/{user}', 'TestController@formEditUser')->name('users.formEditUser');
    Route::get('usuarios/{user}', 'TestController@listUser')->name('users.list');

    /*
     * VERBO POST
     */
    Route::post('usuarios/store', 'TestController@storeUser')->name('users.store');

    /*
     * VERBO PUT/PATCH
     */
    Route::put('usuarios/edit/{user}', 'TestController@edit')->name('users.edit');

    /*
     * VERBO PUT/PATCH
     */
    Route::delete('usuarios/destroy/{user}', 'TestController@destroy')->name('user.destroy');
});


