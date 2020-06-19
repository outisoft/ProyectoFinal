<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoleUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('role_id')->unsigned();
            $table->unsignedBigInteger('user_id')->unsigned();

            $table->foreign('role_id')
              ->references('id')->on('roles')
              ->onDelete('cascade');

            $table->foreign('user_id')
              ->references('id')->on('users')
              ->onDelete('cascade');

          #  $table->unsignedBigInteger('role_id')->unsigned();
          #  $table->unsignedBigInteger('user_id')->unsigned();

          #  $table->index(["role_id"], 'fk_role_users_role1_idx');

          #  $table->index(["user_id"], 'fk_role_users_users1_idx');

          #  $table->foreign('role_id', 'fk_role_users_role1_idx')
          #      ->references('id')->on('roles')
          #      ->onDelete('cascade');

          #  $table->foreign('user_id', 'fk_role_users_users1_idx')
          #      ->references('id')->on('users')
          #      ->onDelete('cascade');
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
        Schema::dropIfExists('role_user');
    }
}
