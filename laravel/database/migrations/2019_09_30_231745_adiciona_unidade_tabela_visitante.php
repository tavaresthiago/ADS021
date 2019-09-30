<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdicionaUnidadeTabelaVisitante extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tb_visitante', function (Blueprint $table) {
            $table -> integer('unidade_id')
                    -> unsigned()
                    -> nullable();
            $table -> foreign('unidade_id')
                    -> references('id')
                    -> on('tb_unidade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_visitante', function (Blueprint $table) {
            $table -> dropForeign('visitante_unidade_id_foreign');
            $table ->dropColumn('unidade_id');
        });
    }
}
