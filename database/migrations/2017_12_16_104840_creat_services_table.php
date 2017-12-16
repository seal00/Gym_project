<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('tipo', array('Musculação','Personal Training Yoga', 'Personal Training Pilates', 'Personal Training'));
            $table->string('nome');
            $table->integer('sala')->nullable();
            $table->enum('dia', array('Segunda','Terça','Quarta', 'Quinta', 'Sexta', 'Sábado', 'Domingo'))->nullable();
            $table->enum('hora', array('9:00','10:00', '11:00','12:00','13:00','14:00','15:00','16:00','17:00','18:00','19:00','20:00'))->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
