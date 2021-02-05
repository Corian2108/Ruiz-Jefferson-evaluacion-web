<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfiguracionsTable extends Migration
{
    public function up()
    {
        Schema::create('configuracions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('idioma');
            $table->string('pais');
            $table->string('estado');
            $table->unsignedBigInteger('usuario_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('configuracions');
    }
}
