<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre');
            $table->string('nombre_completo');
            $table->string('email')->unique();
            $table->string('telefono')->unique();
            $table->integer('edad');
            $table->date('fecha_nacimiento');
            //realción con configuracion
            $table->unsignedBigInteger('configuracion_id');
            $table->foreign('configuracion_id')->references('id')->on('configuracions')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
