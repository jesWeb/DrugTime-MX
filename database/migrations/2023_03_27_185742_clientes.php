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
        Schema::create('clientes',function (Blueprint $table){
            $table->id();
            $table->string('nombre');
            $table->date('fechaN');
            $table->char('sexo');
            $table->integer('peso');
            $table->char('alergias');
            $table->string('enfermedades');
            $table->integer('telefono');
            $table->integer('imagenU');
            $table->timestamps();
             //llave foranea
            //type user 
            $table->unsignedBigInteger('type_usuarios_id');
            $table->foreign('type_usuarios_id')->references('id')->on('type_usuarios');
            //registro de usuarios
            $table->unsignedBigInteger('registros_id');
            $table->foreign('registros_id')->references('id')->on('registros');
            //cuidadores 
            $table->unsignedBigInteger('cuidadors_id');
            $table->foreign('cuidadors_id')->references('id')->on('cuidadors');
            // tratamientos
            $table->unsignedBigInteger('tratamientos_id');
            $table->foreign('tratamientos_id')->references('id')->on('tratamientos');
            //medicamentos 
            $table->unsignedBigInteger('medicamentos_id');
            $table->foreign('medicamentos_id')->references('id')->on('medicamentos');
            //maquinas
            $table->unsignedBigInteger('maquinas_id');
            $table->foreign('maquinas_id')->references('id')->on('maquinas');
            //estados
            $table->unsignedBigInteger('estados_id');
            $table->foreign('estados_id')->references('id')->on('estados');
            //municipios 
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
        Schema::dropIfExists('clientes');
    }
};
