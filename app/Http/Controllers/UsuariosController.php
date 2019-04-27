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

	public function insert(UsuariosRequest $request) {
		$nome = Request::input('nome');
		Usuario::create(Request::all());
		Request::session()->flash('status', '<strong>Successo!</strong> O usuário '.$nome. ' foi adicionado.');
		return redirect()->action('UsuariosController@lista');
	}

	public function editar($id) {
		$usuario = Usuario::find($id);
		return view('painel.Usuarios.editar')->with('usuario', $usuario);
	}

	public function update($id, UsuariosRequest $request) {
		
		$nome = Request::input('nome');
		$user = Usuario::findOrFail($id);
		$user->update($request->all());
		Request::session()->flash('status', '<strong>Sucesso!</strong> O usuário '.$nome. ' foi atualizado.');
		return redirect()->action('UsuariosController@lista');
 	}

	public function excluir($id) {
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