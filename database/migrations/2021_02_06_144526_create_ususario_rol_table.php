<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsusarioRolTable extends Migration
{
    public function up()
    {
        Schema::create('ususario_rol', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            //relación con rol
            $table->bigInteger('rol_id')->unsigned();
            $table->foreign('rol_id')->references('id')->on('rols')
                ->onDelete('cascade')->onUpdate('cascade');
            //relación con users
            $table->bigInteger('usuario_id')->unsigned();
            $table->foreign('usuario_id')->references('id')->on('usuarios')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('ususario_rol');
    }
}
