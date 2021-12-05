<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_lists', function (Blueprint $table) {
            $table->id();
            // $table->string('user_id');//uder table
            // $table->string('employeer_id');//employee table
            $table->string('table_id');//table table
            
            $table->string('si');
            $table->string('invoice_no');
           
            $table->string('customer_name');
            $table->string('designation');

            $table->string('table_name');
            $table->string('state');
           
            $table->string('order_date');
            $table->string('amount');

           
          
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_lists');
    }
}
