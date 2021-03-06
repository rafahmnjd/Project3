<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShortagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shortages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('charity_id');
            $table->unsignedInteger('quantity')->default(1);
            $table->set('type', ['min', 'plus'])->default('min');
            $table->unsignedBigInteger('item_id');
            $table->set('state',['waiting','closed']);
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
        Schema::dropIfExists('shortages');
    }
}
