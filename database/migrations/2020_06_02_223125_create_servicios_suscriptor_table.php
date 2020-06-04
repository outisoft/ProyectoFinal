<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiciosSuscriptorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios_suscriptor', function (Blueprint $table) {
          $table->increments('id');
          $table->unsignedBigInteger('servicios_id')->unsigned();
          $table->unsignedBigInteger('suscriptor_id')->unsigned();

          $table->index(["servicios_id"], 'fk_servicios_suscriptor_servicios1_idx');

          $table->index(["suscriptor_id"], 'fk_servicios_suscriptor_users1_idx');

          $table->foreign('servicios_id', 'fk_servicios_suscriptor_servicios1_idx')
              ->references('id')->on('servicios')
              ->onDelete('no action')
              ->onUpdate('no action');

          $table->foreign('suscriptor_id', 'fk_servicios_suscriptor_users1_idx')
              ->references('id')->on('users')
              ->onDelete('no action')
              ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicios_suscriptor');
    }
}
