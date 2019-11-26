<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaReservas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_reservas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('condominio_id')
                    ->unsigned()
                    ->nullable();
            $table->foreign('condominio_id')
                    ->references('id')
                    ->on('tb_condominio');
            $table->date('data_de_reserva');
            $table->integer('area_id')
                    ->unsigned()
                    ->nullable();
            $table->foreign('area_id')
                    ->references('id')
                    ->on('tb_area');
            $table->integer('unidade_id')
                    ->unsigned()
                    ->nullable();
            $table->foreign('unidade_id')
                    ->references('id')
                    ->on('tb_unidade');
            $table->boolean('situacao');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_reservas');
    }
}
