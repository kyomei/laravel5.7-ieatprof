<?php

namespace escola\Http\Controllers;

use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Facades\Validator;
use escola\Usuario;
class UsuariosController extends Controller {

	public function lista() {

		$data['nav_active'] = 'usuarios';

		$data['usuarios'] = Usuario::all();
		return view('painel.Usuarios.listagem', $data);
	}
}