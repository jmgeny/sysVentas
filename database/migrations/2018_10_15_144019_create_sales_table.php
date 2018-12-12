<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('people_id')->unsigned(); //persona
            $table->string('tipo_comprobante');
            $table->string('serie_comprobante');
            $table->string('numero_comprobante');
            $table->date('fecha');
            $table->string('impuesto');
            $table->decimal('total',11,2);
            $table->string('estado');            
            $table->timestamps();

            $table->foreign('people_id')->references('id')->on('people');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
}
