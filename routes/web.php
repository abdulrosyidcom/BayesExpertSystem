<?php

use Illuminate\Support\Facades\Auth;
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
        Route::resource('posts', 'PostsController');
        Route::resource('rules', 'RulesController');
        Route::resource('categories', 'CategoriesController');
        Route::resource('tags', 'TagsController');

        Route::get('/profile', 'SettingsController@profile');
        Route::patch('/profile/update', 'SettingsController@profileUpdate');
        Route::get('/password', 'SettingsController@password')->name('backend.password');
        Route::patch('/updatePassword', 'SettingsController@updatePassword')->name('backend.updatePassword');
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

        Route::get('/profile', 'SettingsController@profile');
        Route::patch('/profile/update', 'SettingsController@profileUpdate');
        Route::get('/password', 'SettingsController@password')->name('users.password');
        Route::patch('/updatePassword', 'SettingsController@updatePassword')->name('users.updatePassword');

        // diagnosis
        Route::get('/diagnosis', 'DiagnosisController@index')->name('users.diagnosis');
        Route::post('/diagnosis/proccess', 'DiagnosisController@proccess')->name('diagnosis.proccess');
        // Route::get('/diagnosis/results', 'DiagnosisController@results')->name('diagnosis.results');
        // END::diagnosis

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
