<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearAutomovilesTabla extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('automoviles', function (Blueprint $table) {
            
            $table->string('placa')->primary();
            $table->string('tipo');
            $table->time('entrada');
            $table->time('salida');
            $table->decimal('total');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('automoviles');
    }
}
