<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('city_id');
            $table->string('address');
            $table->string('avatar');
            $table->text('images')->nullable();
            $table->text('description')->nullable();
            $table->decimal('normal_price',8,2);
            $table->decimal('our_price',8,2);
            $table->integer('star_rate');
            $table->string('credit')->nullable();
            $table->integer('selection')->nullable();
            
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
        Schema::dropIfExists('hotels');
    }
}
