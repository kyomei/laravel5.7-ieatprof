<?php

namespace escola\Http\Controllers;

use escola\Http\Controllers\Controller;

class PainelController extends Controller {

	public function login() {
		return view('painel.login');
	}

	public function register() {
		return view('painel.register');
	}

	public function dashboard() {

		$data['nav_active'] = 'dashboard';
		return view('painel.dashboard', $data);
	}
}