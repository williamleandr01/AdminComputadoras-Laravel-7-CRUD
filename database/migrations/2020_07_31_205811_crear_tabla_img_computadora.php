<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaImgComputadora extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('img_computadora', function (Blueprint $table) {
            $table->increments('id_img_compu');
            $table->unsignedInteger('id_computadora');
            $table->string('img_compu', 200);
            $table->foreign('id_computadora', 'fk_id_compu_img_compu')
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
        Schema::dropIfExists('img_computadora');
    }
}
