<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFabricsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fabrics', function (Blueprint $table) {
            $table->id();
            $table->string('fabric_id');
            $table->string('docket_no');
            $table->string('style_no');
            $table->string('buyer');
            $table->string('item');
            $table->string('color');
            $table->string('po_no');
            $table->string('quantity');
            $table->string('rolls');
            $table->string('construction');
            $table->string('recv_date');
            $table->string('fabric_length');
            $table->string('fabric_route');
            $table->string('fabric_photo');
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
        Schema::dropIfExists('fabrics');
    }
}
