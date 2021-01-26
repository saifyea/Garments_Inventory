<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThreadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('threads', function (Blueprint $table) {
            $table->id();
            $table->string('style_no');
            $table->string('buyer');
            $table->string('count_no');
            $table->string('color');
            $table->string('shade_no');
            $table->string('cone_length');
            $table->string('sup_id');
            $table->string('recv_date');
            $table->string('thread_route');
            $table->string('thread_type');
            $table->string('ttl_recv_cone');
            $table->string('thread_comments');
            $table->string('thread_photo');
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
        Schema::dropIfExists('threads');
    }
}
