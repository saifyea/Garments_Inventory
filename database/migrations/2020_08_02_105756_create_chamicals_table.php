<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChamicalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chamicals', function (Blueprint $table) {
            $table->id();
            $table->string('chamical_id');
            $table->string('buyer');
            $table->string('style_no');
            $table->string('chamical_name');
            $table->string('chamical_type');
            $table->string('sup_id');
            $table->string('recv_date');
            $table->string('chamical_stored');
            $table->string('ttl_recv');
            $table->string('chamical_comments');
            $table->string('chamical_photo');
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
        Schema::dropIfExists('chamicals');
    }
}
