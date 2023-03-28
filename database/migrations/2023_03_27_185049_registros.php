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
        //
        Schema::create('registros',function (Blueprint $table){
            $table->id();
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamps();
             //llave foranea
           //  $table->unsignedBigInteger('type_usuarios_id');
           //  $table->foreign('type_usuarios_id')->references('id')->on('type_usuarios');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('registros');
    }
};
