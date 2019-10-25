<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("titulo");
            $table->text('conteudo');
            $table->integer('dias_id');

            $table->foreign('dias_id')->references('id')->on('dias')->onDelete("cascade");
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
        // Schema::table('table', function (Blueprint $table) {
        //     $table->dropForeign('estudos_dias_id_foreign');
        // });
        Schema::dropIfExists('estudos');
    }
}
