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

Route::get('/','SiteController@home');
Route::get('/quem-somos', 'SiteController@quem_somos');
Route::get('/fale-conosco', 'SiteController@fale_conosco');
Route::get('/mural', 'SiteController@mural');
Route::get('/cursos', 'SiteController@cursos');
Route::get('/cursos/cursos-livres', 'SiteController@cursos_livres');
Route::get('/cursos/cursos-livres/{name}', 'SiteController@cursos_livres_detalhes');
Route::get('/cursos/pacote-de-cursos','SiteController@pacote_de_cursos');
