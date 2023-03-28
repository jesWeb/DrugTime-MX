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
        Schema::create('municipios',function (Blueprint $table){
            $table->id();
            $table->string('nombre');
            $table->string('cp');
            $table->timestamps();
            //llave foranea
            $table->unsignedBigInteger('municipios_id');
            $table->foreign('municipios_id')->references('id')->on('municipios');
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
        Schema::dropIfExists('municipios');
    }
};
