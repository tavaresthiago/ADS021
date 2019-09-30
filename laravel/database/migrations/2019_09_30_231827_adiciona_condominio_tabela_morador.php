<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdicionaCondominioTabelaMorador extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tb_morador', function (Blueprint $table) {
            $table->integer('condominio_id')
                    ->unsigned()
                    ->nullable();
            $table->foreign('condominio_id')
                    ->references('id')
                    ->on('tb_condominio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_morador', function (Blueprint $table) {
            $table->dropForeign('morador_condominio_id_foreign');
            $table->dropColumn('condominio_id');
        });
    }
}
