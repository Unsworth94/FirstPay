<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->text('invoiceReference');
            $table->text('gateways');
            $table->text('currency');
            $table->decimal('subtotal');
            $table->decimal('tax');
			$table->integer('user_id');
            $table->decimal('total');
			$table->string('recipient_email');
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
        Schema::drop('invoices');
    }
}
