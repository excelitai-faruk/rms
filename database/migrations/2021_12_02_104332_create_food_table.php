<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food', function (Blueprint $table) {
            $table->id();
            $table->string('outlet_id');
            $table->string('category_name');
            $table->string('kichen')->nullable();
            $table->string('food_name')->nullable();
            $table->string('component')->nullable();
            $table->string('notes')->nullable();
            $table->string('description')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->time('cooking_time')->nullable();
            $table->float('vat')->nullable();
            $table->float('offer_rate')->nullable();
            $table->string('status')->nullable();
            $table->string('image')->nullable();
            $table->string('manu_type')->default(0);
        

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
        Schema::dropIfExists('food');
    }
}


