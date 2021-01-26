<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccessoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accessories', function (Blueprint $table) {
            $table->id();
            $table->string('accessories_id');
            $table->string('buyer');
            $table->string('style_no');
            $table->string('accessoris_name');
            $table->string('ttl_recv');
            $table->string('unit');
            $table->string('sup_id');
            $table->string('recv_date');
            $table->string('acc_route');
            $table->string('acc_comments');
            $table->string('acc_photo');
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
        Schema::dropIfExists('accessories');
    }
}
