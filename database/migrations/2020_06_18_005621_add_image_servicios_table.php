<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImageServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('servicios', function(Blueprint $table){
            $table->string('Foto1')
              ->after('MontoMora')
              ->nullable();
            $table->string('Foto2')
              ->after('Foto1')
              ->nullable();
            $table->string('Foto3')
              ->after('Foto2')
              ->nullable();
        }
      );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
