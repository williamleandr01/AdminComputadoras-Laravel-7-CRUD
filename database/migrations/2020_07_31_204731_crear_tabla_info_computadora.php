<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaInfoComputadora extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_computadora', function (Blueprint $table) {
            $table->increments('id_info_compu');
            $table->unsignedInteger('id_computadora');
            $table->string('descrip_compu', 500)->unique();
            $table->foreign('id_computadora', 'fk_id_compu_info_compu')
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
        Schema::dropIfExists('info_computadora');
    }
}
