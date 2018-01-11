<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMinutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('minutes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('meeting_id');
            $table->dateTime('fecha');
            $table->integer('tipo_minute_id');
            $table->dateTime('vencimiento');
            $table->integer('user_id')->comment('usuario que crea el elemento');
            $table->integer('responsable_id')->comment('Persona asignada al elemento');
            $table->integer("orden")->default(0);
            $table->text("comentarios")->nullable();
            $table->dateTime("fecha_limite")->nullable();
            $table->integer('avance')->default(0);
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
        Schema::dropIfExists('minutes');
    }
}
