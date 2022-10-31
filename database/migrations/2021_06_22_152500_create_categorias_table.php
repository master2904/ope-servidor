<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('descripcion');
            $table->integer('id_concurso');
            $table->timestamps();

            //foreign key table concursos
            // $table->unsignedBigInteger('id_concurso')->comment("Id de la tabla concurso");
            // $table->foreign('id_concurso')
            //     ->onUpdate('cascade')
            //     ->onDelete('cascade')
            //     ->references('id')
            //     ->on('concursos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('categorias');
    }
}
