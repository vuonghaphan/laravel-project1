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
// Route::get('', 'Welcome_Controller@getWelcome');

// Route::get('users', 'UsersController@getUser');

// Route::get('users/edit/{idUser}', 'Edit_UsersController@getEdit_user');
// Route::post('users/edit/{idUser}', 'Edit_UsersController@postEdit_user');

// Route::get('users/add', 'Add_UsersController@getAdd_user');
// Route::post('users/add', 'Add_UsersController@postAdd_user');

// Route::get('users/del/{idUser}', 'UsersController@delUser');

Route::group(['prefix' => 'users',
              'middleware'=>"guest"
], function () {
    Route::get('', 'UsersController@getUser')->name('teo');

    Route::get('edit/{idUser}', 'Edit_UsersController@getEdit_user');
    Route::post('edit/{idUser}', 'Edit_UsersController@postEdit_user');

    Route::get('add', 'Add_UsersController@getAdd_user');
    Route::post('add', 'Add_UsersController@postAdd_user');

    Route::get('del/{idUser}', 'UsersController@delUser');
});






//lỳ huyết
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('users', function () {
//     echo 'lực ăn lôz';
// });
// Route::get('', function () {
//     echo 'lực ăn buồi';
// });

// //route động
// Route::get('users/{teo}', function ($teo) {
//     echo $teo;
// });

// Route::get('users/{name}/{id}*{qty}', function ($a,$b,$c) {
//     echo $a;
//     echo '<br>';
//     echo $b;
//     echo '<br>';
//     echo $c;
// });
