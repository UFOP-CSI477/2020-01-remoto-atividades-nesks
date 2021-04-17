<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scores', function (Blueprint $table) {
            $table->id();
            $table->date('data');
            $table->integer('nivel');
            $table->integer('erros');
            $table->integer('acertos');
            $table->string('premiacao');
            $table->unsignedBigInteger('aluno_id');
            $table->timestamps();

            $table->foreign('aluno_id')
            ->references('id')
            ->on('alunos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scores');
    }
}
