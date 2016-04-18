<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoiceitemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('invoice_items', function (Blueprint $table) {
            $table->increments('id');
            $table->text('invoiceReference');
            $table->text('title');
            $table->text('description');
            $table->integer('quantity');
            $table->decimal('price');
            $table->timestamps();
			
			//$table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('invoice_items');
    }
}
