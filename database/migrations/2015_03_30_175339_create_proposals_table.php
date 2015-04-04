<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProposalsTable extends Migration {

    // This migration handles the promotion requests (proposals)


	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('proposals', function(Blueprint $table)
        {
			$table->increments('id');
            $table->string('status')->nullable();
            $table->integer('item_id')->nullable();
            $table->text('user_note')->nullable();
            $table->text('unit_id')->nullable();
            $table->text('admin_note')->nullable();
            $table->integer('quantity')->nullable();
            $table->timestamp('exp_date')->nullable();
            $table->string('receive_date')->nullable();

            $table->integer('user_id')->unsigned();
			$table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('proposals');
	}

}
