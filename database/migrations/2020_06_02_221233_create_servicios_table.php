<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
          $table->bigIncrements('id');
            $table->string('nombre', 45)->nullable();
            $table->string('descripcion', 100)->nullable();
            $table->integer('precio')->nullable();
            $table->boolean('activo')->nullable()->default('0');
            $table->unsignedBigInteger('cobrador_id')->unsigned()->nullable()->default(null);
            $table->timestamps();
            
            $table->index(["cobrador_id"], 'fk_servicios_users1_idx');

            $table->foreign('cobrador_id', 'fk_servicios_users1_idx')
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
        Schema::dropIfExists('servicios');
    }
}
