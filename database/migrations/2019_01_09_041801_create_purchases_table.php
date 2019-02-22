<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->increments('id');
             $table->string('sup_name', 100);
            $table->date('date');
            $table->bigInteger('invoice_no');
            $table->text('details');

            $table->string('item_name');
            $table->bigInteger('quantity');
            $table->bigInteger('rate');
            $table->bigInteger('total');



            
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
        Schema::dropIfExists('purchases');
    }
}
