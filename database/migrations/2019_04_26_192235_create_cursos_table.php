<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 100);
            $table->longText('descricao')->nulllabe();
            $table->unsignedSmallInteger('horas')->nullable()->default(0);
            $table->unsignedSmallInteger('meses')->nullable()->default(0);
            $table->boolean('active')->nullable()->default(1);
            $table->string('color', 10)->nullable();
            $table->string('imagem', 255)->nullable();
            $table->string('slug', 255)->nullable()->unique();
            
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
        Schema::dropIfExists('cursos');
    }
}
