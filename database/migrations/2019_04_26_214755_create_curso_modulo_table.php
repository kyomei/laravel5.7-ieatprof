<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursoModuloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curso_modulo', function (Blueprint $table) {
            
            
            $table->increments('id');
            $table->integer('curso_id')->unsigned();
            $table->integer('modulo_id')->unsigned();
            $table->char('order', 2);

            $table->foreign('curso_id')
                ->references('id')->on('cursos')
                ->onDelete('cascade');

            $table->foreign('modulo_id')
                ->references('id')->on('modulos')
                ->onDelete('cascade');

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));


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
        Schema::dropIfExists('curso_modulo');
    }
}
