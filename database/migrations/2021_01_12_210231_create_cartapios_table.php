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
            $table->increments('id');
            $table->string('tipo');
            $table->string('descricao');
            $table->decimal('preco', 10, 2);
            $table->integer('clientes_id')->unsigned();
            $table->foreign('clientes_id')->references('id')->on('cartapios');
            $table->integer('funcionarios_id')->unsigned();
            $table->foreign('funcionarios_id')->references('id')->on('cartapios');
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
