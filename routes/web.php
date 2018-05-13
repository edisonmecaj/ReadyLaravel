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
    if(Auth::check()){
        return view("home");
    }else{
        return view('auth.login');
    }
});

Route::get("changelanguage/{lang}", function($lang){
    Session::put("locale", $lang);
    Session::save();
    if(Auth::check()){
        Auth::user()->update(["locale" => $lang]);
    }
    return back();
});

Auth::routes();

Route::middleware(["auth"])->group(function(){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get("/profile", "UserController@profile")->name("profile");
    Route::post("/profile", "UserController@updateProfile")->name("profile");
    Route::get("/profile/change_password", "UserController@changePassword");
    Route::post("/profile/change_password", "UserController@updatePassword");
    Route::get("/profile/change_email", "UserController@changeEmail");
    Route::post("/profile/change_email", "UserController@updateEmail");
    Route::get("/profile/change_picture", "UserController@changePicture");
    Route::post("/profile/change_picture", "UserController@updatePicture");
});
    
Route::middleware(["auth", "dev"])->prefix("menus")->group(function(){
    Route::get('/', 'MenuController@index')->name('users');
    Route::post('/', 'MenuController@reorder');
    Route::get('/add', 'MenuController@add');
    Route::post('/add', 'MenuController@create');
    Route::get('/{menu}/edit', 'MenuController@edit');
    Route::post('/{menu}/edit', 'MenuController@update');
    Route::get('/{menu}/delete', 'MenuController@delete');
    Route::post('/{menu}/delete', 'MenuController@destroy');
});

Route::middleware(["auth", "dev"])->prefix("roles")->group(function(){
    Route::get('/', 'RoleController@index')->name('roles');
    Route::post('/', 'RoleController@reorder');
    Route::get('/add', 'RoleController@add');
    Route::post('/add', 'RoleController@create');
    Route::get('/{rol}/edit', 'RoleController@edit');
    Route::post('/{rol}/edit', 'RoleController@update');
    Route::get('/{rol}/delete', 'RoleController@delete');
    Route::post('/{rol}/delete', 'RoleController@destroy');
});

Route::middleware(["auth", "admin"])->prefix("users")->group(function(){
    Route::get('/', 'UserController@index')->name('users');
    Route::post('/', 'UserController@reorder');
    Route::get('/add', 'UserController@add');
    Route::post('/add', 'UserController@create');
    Route::get('/{user}/edit', 'UserController@edit');
    Route::post('/{user}/edit', 'UserController@update');
    Route::get('/{user}/delete', 'UserController@delete');
    Route::post('/{user}/delete', 'UserController@destroy');
});

Route::middleware(["auth", "admin"])->prefix("langs")->group(function(){
    Route::get('/', 'LangController@index')->name('users');
    Route::post('/', 'LangController@reorder');
    Route::get('/add', 'LangController@add');
    Route::post('/add', 'LangController@create');
    Route::get('/{lang}/edit', 'LangController@edit');
    Route::post('/{lang}/edit', 'LangController@update');
    Route::get('/{lang}/delete', 'LangController@delete');
    Route::post('/{lang}/delete', 'LangController@destroy');
    Route::get('/{lang}/translate', 'LangController@missingTranslations');
    Route::post('/{lang}/translate', 'LangController@updateTranslations');
});

Route::middleware(["auth", "admin"])->prefix("tiles")->group(function(){
    Route::get('/', 'TileController@index')->name('tiles');
    Route::post('/', 'TileController@reorder');
    Route::get('/add', 'TileController@add');
    Route::post('/add', 'TileController@create');
    Route::get('/{tile}/edit', 'TileController@edit');
    Route::post('/{tile}/edit', 'TileController@update');
    Route::get('/{tile}/delete', 'TileController@delete');
    Route::post('/{tile}/delete', 'TileController@destroy');
    Route::get('/{tile}/left', 'TileController@left');
    Route::get('/{tile}/right', 'TileController@right');
});