<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFichaTecnicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fichastecnicas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('cliente');
            $table->date('data')->nullable();;
            $table->integer('tempo');
            $table->string('componentes');
            $table->string('metodologia');
            $table->string('descricao');
            $table->integer('solicitacao_id')->unsigned();
            $table->foreign('solicitacao_id')->references('id')->on('solicitacoes');
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
        Schema::dropIfExists('fichastecnicas');
    }
}
