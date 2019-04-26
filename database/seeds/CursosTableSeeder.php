<?php

use Illuminate\Database\Seeder;

class CursosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	DB::table('cursos')->delete();

        DB::table('cursos')->insert(['nome' => 'Informática', 'descricao' => 'O curso de inform', 'horas' => 96, 'meses' => 12]);
        DB::table('cursos')->insert(['nome' => 'Inglês', 'descricao' => 'O curso de inglês', 'horas' => 192, 'meses' => 24]);
        DB::table('cursos')->insert(['nome' => 'Auxiliar administrativo', 'descricao' => 'O curso de auxi', 'horas' => 112, 'meses' => 16]);
    }
}
