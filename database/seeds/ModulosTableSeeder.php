<?php

use Illuminate\Database\Seeder;

class ModulosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	DB::table('modulos')->delete();

        DB::table('modulos')->insert(['nome' => 'Inglês Básico 1', 'descricao' => 'bom curso B1', 'horas' => 32, 'meses' => 4]);
        DB::table('modulos')->insert(['nome' => 'Inglês Básico 2', 'descricao' => 'bom curso B2', 'horas' => 32, 'meses' => 4]);
        DB::table('modulos')->insert(['nome' => 'Inglês Intermediário 1', 'descricao' => 'bom curso A1', 'horas' => 32, 'meses' => 4]);
        DB::table('modulos')->insert(['nome' => 'Inglês Intermediário 2', 'descricao' => 'bom curso A2', 'horas' => 32, 'meses' => 4]);


        DB::table('modulos')->insert(['nome' => 'Windows 10', 'descricao' => 'O curso de win10', 'horas' => 20, 'meses' => 2]);
        DB::table('modulos')->insert(['nome' => 'Word 2016', 'descricao' => 'O curso de Word', 'horas' => 16, 'meses' => 3]);
        DB::table('modulos')->insert(['nome' => 'Excel 2016', 'descricao' => 'O curso de Excel', 'horas' => 18, 'meses' => 3]);

        DB::table('modulos')->insert(['nome' => 'Auxiliar de RH', 'descricao' => 'O curso de rh', 'horas' => 10, 'meses' => 2]);
        DB::table('modulos')->insert(['nome' => 'Contabilidade', 'descricao' => 'O curso de Contabilidade', 'horas' => 20, 'meses' => 4]);
    }
}
