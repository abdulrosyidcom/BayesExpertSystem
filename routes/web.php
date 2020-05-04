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
|
*/

Auth::routes();

Route::group(
    [
        'as' => 'admin.',
        'prefix' => 'admin',
        'namespace' => 'Admin',
        'middleware' => ['auth', 'admin']
    ],
    function () {
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');
        Route::resource('symptoms', 'SymptomsController');
        Route::resource('diseases', 'DiseasesController');
        Route::resource('datasets', 'DatasetsController');
        Route::resource('posts', 'PostsController');
        Route::resource('categories', 'CategoriesController');
        Route::resource('tags', 'TagsController');

        Route::get('/profile', 'SettingsController@profile');
        Route::patch('/profile/update', 'SettingsController@profileUpdate');
    }
);


Route::group(
    [
        'as' => 'users.',
        'prefix' => 'users',
        'namespace' => 'Users',
        'middleware' => ['auth', 'users']
    ],
    function () {
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    }
);

Route::group(
    ['namespace' => 'Front'],
    function () {
        Route::get('/', 'HomeController@index')->name('home');
        Route::get('/blog', 'PostsController@index')->name('blogs.index');
        Route::get('/blog/{slug}', 'PostsController@show')->name('blogs.show');
    }
);
