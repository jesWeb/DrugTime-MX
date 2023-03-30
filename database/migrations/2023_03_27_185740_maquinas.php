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
        Schema::create('maquinas', function (Blueprint $table)  {
            $table->id();
            $table->string('nombre');
            $table->string('Modelo');
            $table->string('Humedad');
            $table->timestamps();
            //llaves foraneas
            $table->unsignedBigInteger('cuidadors_id');
            $table->foreign('cuidadors_id')->references('id')->on('cuidadors');

            $table->unsignedBigInteger('tratamientos_id');
            $table->foreign('tratamientos_id')->references('id')->on('tratamientos');

            $table->unsignedBigInteger('medicamentos_id');
            $table->foreign('medicamentos_id')->references('id')->on('medicamentos');

            $table->unsignedBigInteger('ubicaciones_id');
            $table->foreign('ubicaciones_id')->references('id')->on('ubicaciones');

           
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
        Schema::dropIfExists('maquinas');
    }
};
