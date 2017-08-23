<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cid');
            $table->string('title');
            $table->text('description');
            $table->string('code');
            $table->string('type');
            $table->text('link');
            $table->integer('tokens')->default(5);
            $table->string('validity');
            $table->string('discount');
            $table->text('categories');
            $table->string('store_name');
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
        Schema::dropIfExists('coupons');
    }
}
