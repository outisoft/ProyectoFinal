<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMensajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('body');
            $table->unsignedBigInteger('sender_id')->unsigned()->nullable()->default(null);
            $table->unsignedBigInteger('recipient_id')->unsigned()->nullable()->default(null);
            $table->timestamps();

            $table->index(["sender_id"], 'fk_messages_users1_idx');

            $table->foreign('sender_id', 'fk_messages_users1_idx')
                ->references('id')->on('users')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->index(["recipient_id"], 'fk_messages_users2_idx');

            $table->foreign('recipient_id', 'fk_messages_users2_idx')
                    ->references('id')->on('users')
                    ->onDelete('no action')
                    ->onUpdate('no action');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
