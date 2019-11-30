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

Route::get('index',[
    'as'=>'trang-chu',
    'uses'=>'pageController@getIndex'
]);

Route::get('loai-san-pham/{id}',[
    'as'=>'loaisanpham',
    'uses'=>'pageController@getLoaisp'
]);
Route::get('chi-tiet-san-pham/{id}',[
    'as'=>'chitietsanpham',
    'uses'=>'pageController@getChiTietSp'
]);
Route::get('lienhe',[   
    'as'=>'lienhe',
    'uses'=>'pageController@getContact'
]);
Route::get('gioi-thieu',[
    'as'=>'gioithieu',
    'uses'=>'pageController@getAbout'
]);

Route::get('search',[
    'as'=>'search',
    'uses'=>'pageController@getSearch'
]);

Route::get('admin',[
    'as'=>'login',
    'uses'=>'pageController@getAdmin'
]);
Route::post('admin',[
    'as'=>'login',
    'uses'=>'pageController@postAdmin'
]);

//Route ADMIN
Route::group(['prefix'=>'admin'],function(){

    //--type_Products--
    Route::group(['prefix'=>'typeproduct'],function(){
        
        Route::get('list','TypeProductsController@getList');

        Route::get('add','TypeProductsController@getAdd');
        Route::post('add','TypeProductsController@postAdd');

        Route::get('edit/{id}','TypeProductsController@getEdit');
        Route::post('edit/{id}','TypeProductsController@postEdit');

        Route::get('delete/{id}','TypeProductsController@getDelete');
    });


    //--Producst--
    Route::group(['prefix'=>'product'],function(){
        Route::get('list','ProductsController@getList');
        
        Route::get('add','ProductsController@getAdd');
        Route::post('add','ProductsController@postAdd');

        Route::get('edit/{id}','ProductsController@getEdit');
        Route::post('edit/{id}','ProductsController@postEdit');

        Route::get('delete/{id}','ProductsController@getDelete');
    });

});

