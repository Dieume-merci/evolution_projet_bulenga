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
    Route::get('view-consultation-pre-natale/', 'CpnController@viewcpn')->name("view_cpn");
    Route::get('view-consultation-post-natale/', 'CponController@viewcpon')->name("view_cpon");
    Route::get('view-accouchement/{id}', 'MaterniteController@viewmaterinite')->name("view_ac");
    Route::get('explorer-Maternite/{id}', 'MaterniteController@viewmateriniteself')->name("view_acc");
    Route::get('view-consultation-pre-natale/{id}', 'CpnController@viewcpnacouchement')->name("view_acc_cpn");
    Route::get('view-patient-maternite/', 'MaterniteController@viewmaternite')->name("view_mere");
    Route::get('view-deces/', 'Statut_enfant@viewdeces')->name("view_deces");
    Route::get('view-type-acouchement/', 'TypeAccouchementController@viewtypeacouchement')->name("view_type_acouchement");
    Route::get('view-planing-familial/', 'PfController@viewPlaningFamilial')->name("view_plan");
    Route::get('view-methode/', 'MethodeController@viewmethode')->name("view_methode");
    Route::get('view-sous-methode/', 'SousMethodeController@viewsousmethode')->name("view_sous_methode");

    // les urls qui explorent les vieuws
    Route::get('explorer-consultation-pre-natale/{id}', 'CpnController@explorercpn')->name("expl_cpn");
    Route::get('explorer-consultation-post-natale/{cpon}', 'CponController@explocpon')->name("exp_cpon");
    Route::get('explorer-planing-familial/{planing}', 'PfController@explorationPlaningF')->name("expl_pf");
    Route::get('add-planing-familial/{planing}', 'PfController@addPlaningF')->name("add_pf");
    // les urls pour inserer dans la base de donnees
    Route::post('inser/methode', 'MethodeController@store')->name("inser_methode");
    Route::post('inser/sous-methode', 'SousMethodeController@store')->name("inser_sousmethode");
    Route::post('inser/type-accouchement', 'TypeAccouchementController@store')->name("inser_typeacouchement");
    Route::get('inserer/planing/familial', 'PfController@store')->name("inserer_planing_familial");
    Route::post('inserer/materinite', 'MaterniteController@store')->name("inser_maternite");
    Route::post('inserer/Traitement/pivot', 'CpontraitementcponController@store')->name("inserer_Traitement_pivot");
    Route::post('inserer/accouchement/', 'AccouchementController@store')->name("inserer_accouchement");
    Route::post('inserer/accouchement/jumeau', 'AccouchementController@storeJumeau')->name("inserer_accouchement_jumeau");
});

