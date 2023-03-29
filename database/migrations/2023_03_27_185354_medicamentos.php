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
        Schema::create('medicamentos',function (Blueprint $table){
            $table->id();
            $table->string('nombre');
            $table->string('descripcion',50);
            $table->string('tipo');
            //$table->Integer('imagenM');
            $table->timestamps();
            //llaves foraneas
            $table->unsignedBigInteger('tratamientos_id');
            $table->foreign('tratamientos_id')->references('id')->on('tratamientos');
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
        Schema::dropIfExists('medicamentos');
    }
};
