<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curriculos', function (Blueprint $table) {
            $table->id();
            $table->text('nome');
            $table->text('telefone');
            $table->text('email');
            $table->integer('idade');
            $table->text('cidade');
            $table->integer('area');

            $table->text('sobre');
            $table->text('formacao');
            $table->text('conhecimento_complementar')->nullable();
            $table->text('experiencia');

            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');

  
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
        Schema::dropIfExists('curriculos');
    }
};
