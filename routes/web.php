<?php

use Illuminate\Support\Facades\Route;
// Auth::routes();
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

Route::group(['namespace' => 'App\Http\Controllers'], function()
{
    /**
     * Home Routes
     */
    Route::get('/', 'HomeController@home');
    Route::get('view_cpn', 'CpnController@viewcpn')->name("view_cpn");
    Route::get('view_cpon', 'CponController@viewcpon')->name("view_cpon");
    Route::get('view_ac/{id}', 'AccouchementController@viewacouchement')->name("view_acc");
    Route::get('view_patiente', 'MereController@viewmere')->name("view_mere");
    Route::get('view_deces', 'DecesController@viewdeces')->name("view_deces");
    Route::get('view_type_acouchement', 'TypeAccouchementController@viewtypeacouchement')->name("view_type_acouchement");
    Route::get('view_depistage', 'DepistageVihHommeController@viewdepistage')->name("view_depistage");
    Route::get('view_methode', 'MethodeController@viewmethode')->name("view_methode");
    Route::get('view_sous_methode', 'SousMethodeController@viewsousmethode')->name("view_sous_methode");
});
