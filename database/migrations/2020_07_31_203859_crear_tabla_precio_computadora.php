<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaPrecioComputadora extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('precio_computadora', function (Blueprint $table) {
            $table->increments('id_precio_compu');
            $table->unsignedInteger('id_computadora');
            $table->string('precio_compu', 100);
            $table->foreign('id_computadora', 'fk_id_compu_precio_compu')
            ->references('id_computadora')
            ->on('computadora')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('precio_computadora');
    }
}
