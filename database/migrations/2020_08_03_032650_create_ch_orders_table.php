<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ch_orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_id');
            $table->string('chamical_id');
            $table->string('emp_id');
            $table->string('order_date');
            $table->string('order_status');
            $table->string('total_products');
            $table->string('issued_by');
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
        Schema::dropIfExists('ch_orders');
    }
}
