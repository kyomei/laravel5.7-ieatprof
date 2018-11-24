<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
// Classe para acessar metodos do banco de dados
use Illuminate\Support\Facades\DB;

class SiteController extends Controller {
    /* Método responsável pela exibição das informações na pág home */

    public function home() {
        return view('home');
    }

    /* Método responsável pela exibição das informações na pág quem-somos */

    public function quem_somos() {
        return view('quem-somos');
    }

    /* Método responsável pela exibição das informações na pág fale-conosco */

    public function fale_conosco() {
        return view('fale-conosco');
    }

    /* Método responsável pela exibição das informações na pág cursos */

    public function cursos() {
        return view('cursos');
    }

    /* Método responsável pela exibição das informações na pág cursos-livres */

    public function cursos_livres() {

        $modulos = DB::select('select * from modulos');
        return view('cursos-livres')->with('modulos', $modulos);
    }

    public function cursos_livres_detalhes() {
        //   $id = Request::path();
        // echo $id;
        $id = Request::route('name');
        $result = DB::select('select * from modulos where slug_modulo = ?', [$id]);
        if (empty($result)) {
            return "Curso não encontrado";
        }
        return view('detalhes')->with('p', $result[0]);
    }

    /* Método responsável pela exibição das informações na pág pacote-de-cursos */

    public function pacotes_de_cursos() {
        return '<h1>Página pacote de cursos</h1>';
    }

}
