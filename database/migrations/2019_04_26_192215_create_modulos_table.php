<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modulos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 100);
            $table->longText('descricao')->nullable();
            $table->unsignedSmallInteger('horas')->nullable()->default(0);
            $table->unsignedSmallInteger('meses')->nullable()->default(0);
            $table->tinyInteger('status')->nullable()->default(0);
            $table->string('color', 10)->nullable();
            $table->string('imagem', 255)->nullable();
            $table->string('slug', 255)->nullable();
            $table->timestamps();


            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modulos');
    }
}
