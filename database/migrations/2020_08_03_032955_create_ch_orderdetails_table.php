<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChOrderdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ch_orderdetails', function (Blueprint $table) {
            $table->id();
            $table->string('order_id');
            $table->string('chamical_id');
            $table->string('emp_id');
            $table->string('quantity');
            $table->string('unicost');
            $table->string('total');
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
        Schema::dropIfExists('ch_orderdetails');
    }
}
