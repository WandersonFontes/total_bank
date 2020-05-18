<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBancosTable extends Migration
{
    public function up()
    {
        Schema::create('bancos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cliente');
            $table->string('conta');
            $table->float('saldo');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('bancos');
    }
}
