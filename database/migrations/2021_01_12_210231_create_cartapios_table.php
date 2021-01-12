<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartapiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cartapios', function (Blueprint $table) {
            $table->id();
            $table->string('tipo');
            $table->string('descricao');
            $table->number('preco');
            $table->foreign('clientes_id')->references('id')->on('clientes');
            $table->foreing('funcionarios_id')->references('id')->on('funcionarios');
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
        Schema::dropIfExists('cartapios');
    }
}
