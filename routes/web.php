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

Route::get('/painel', 'PainelController@login');
Route::get('/painel/register', 'PainelController@register');
Route::get('/painel/index', 'PainelController@dashboard');

Route::get('painel/usuarios', 'UsuariosController@lista');
Route::get('painel/usuarios/adicionar', 'UsuariosController@adicionar');
Route::post('painel/usuarios/insert', 'UsuariosController@insert');
Route::get('painel/usuarios/editar/{id}', 'UsuariosController@editar')->where('id', '[0-9]+');
Route::get('painel/usuarios/excluir/{id}', 'UsuariosController@excluir')->where('id', '[0-9]+');
Route::get('painel/usuarios/delete/{id}', 'UsuariosController@delete')->where('id', '[0-9]+');
