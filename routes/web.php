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
    // les urls qui affichent les infos
    Route::get('view/cpn/', 'CpnController@viewcpn')->name("view_cpn");
    Route::get('view/cpon/', 'CponController@viewcpon')->name("view_cpon");
    Route::get('view/acc/{id}', 'AccouchementController@viewacouchement')->name("view_ac");
    Route::get('view/ac/{id}', 'AccouchementController@viewacouchementself')->name("view_acc");
    Route::get('view/ac_cpn/{id}', 'CpnController@viewcpnacouchement')->name("view_acc_cpn");
    Route::get('view/patiente/', 'MereController@viewmere')->name("view_mere");
    Route::get('view/deces/', 'DecesController@viewdeces')->name("view_deces");
    Route::get('view/type_acouchement/', 'TypeAccouchementController@viewtypeacouchement')->name("view_type_acouchement");
    Route::get('view/planing/', 'PfController@viewPlaningFamilial')->name("view_plan");
    Route::get('view/methode/', 'MethodeController@viewmethode')->name("view_methode");
    Route::get('view/sous_methode/', 'SousMethodeController@viewsousmethode')->name("view_sous_methode");

    // les urls qui explorent les vieuws
    Route::get('exp/cpn/{id}', 'CpnController@explorercpn')->name("expl_cpn");
    Route::get('exp/cpon/{id}', 'CponController@explocpon')->name("exp_cpon");
    Route::get('exp/pf//{id}', 'PfController@explorationPlaningF')->name("expl_pf");
    Route::get('add/pf/{id}', 'PfController@addPlaningF')->name("add_pf");
    // les urls pour inserer dans la base de donnees
    Route::post('inser/methode', 'MethodeController@store')->name("inser_methode");
    Route::post('inser/sousmethode', 'SousMethodeController@store')->name("inser_sousmethode");
});
