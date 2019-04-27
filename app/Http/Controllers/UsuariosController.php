<?php

namespace escola\Http\Controllers;

use Illuminate\Support\Facades\DB;
use escola\Http\Requests\UsuariosRequest;
use escola\Usuario;
use Request;

class UsuariosController extends Controller {

	public function lista() {

		$data['nav_active'] = 'usuarios';


		$data['usuarios'] = Usuario::all();
		$data['total'] = Usuario::count();
		$data['perPage'] = 10;

		return view('painel.Usuarios.listagem', $data);
	}

	public function adicionar() {
		return view('painel.Usuarios.adicionar');
	}

	public function insert2() {

		$nome = Request::input('nome');
		$email = Request::input('email');
		$senha = Request::input('senha');
		$cargo = Request::input('cargo');

		DB::insert('INSERT INTO usuarios (nome, email, senha, cargo) VALUES (?,?,?,?)', array($nome, $email, $senha, $cargo));
		return redirect()->action('UsuariosController@lista')->WithInput(Request::only('nome'));
	}

	public function insert(UsuariosRequest $request) {
		/*
		$params = Request::all();
		$usuario = new Usuario($params);
		$usuario->save();*/
		Usuario::create(Request::all());
		//Request::session()->flash('status', '<strong>Successo!</strong> O usuário '.$);
		return redirect()->action('UsuariosController@lista');
	}

	public function editar($id) {

	}

	public function update() {

	}

	public function excluir($id) {
		//echo "ID DO ITEM: $id";
		return view('painel.Usuarios.excluir')->with('id', $id);
	}

	public function delete($id) {

		// Busca usuário que será excluído
		$user = Usuario::find($id);

		// Criar uma session com uma mensagem
		Request::session()->flash('status', '<strong>Sucesso!</strong> O Usuário  '.$user->nome.' foi removido.');

		// Exclui o usuário e redireciona para lista
		$user->delete();
		return redirect()->action('UsuariosController@lista');
	}
}