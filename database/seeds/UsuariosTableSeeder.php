<?php

use Illuminate\Database\Seeder;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('usuarios')->delete();
    	
    	DB::table('usuarios')->insert([
			'nome' => 'Rafael Jeferson',
        	'email' => 'rafa.jefer@gmail.com',
        	'senha' => md5(123),
        	'cargo' => 'admin',
        	'active' => 1
    	]);
    	/*
        Usuario::create([
        	'nome' => 'Rafael Jeferson',
        	'email' => 'rafa.jefer@gmail.com',
        	'senha' => md5(123),
        	'cargo' => 'admin',
        	'active' => 1
        ]);*/
    }
}
