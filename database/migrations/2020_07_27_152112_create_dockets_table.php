<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dockets', function (Blueprint $table) {
            $table->id();
            $table->string('style_no');
            $table->string('buyer');
            $table->string('pos');
            $table->string('items');
            $table->string('order_qty');
            $table->string('ship_date');
            $table->string('fabric_type');
            $table->string('pocketing');
            $table->string('fuisng');
            $table->string('wash');
            $table->string('thread');
            $table->string('elastic');
            $table->string('button');
            $table->string('zipper');
            $table->string('price_sticker');
            $table->string('poly_sticker');
            $table->string('size_sticker');
            $table->string('barcode_sticker');
            $table->string('other_stickers');
            $table->string('main_label');
            $table->string('care_label');
            $table->string('size_label');
            $table->string('decor_label');
            $table->string('other_lebels');
            $table->string('hook_bar');
            $table->string('rivets');
            $table->string('patch');
            $table->string('tags');
            $table->string('others_items');
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
        Schema::dropIfExists('dockets');
    }
}
