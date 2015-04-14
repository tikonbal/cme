<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStepdetailTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('stepdetail', function(Blueprint $table)
		{
			$table->increments('id');
			
                        $table->string('content')->default('');
                        $table->string('content_type')->default('');
                        $table->foreign('Step_id')->references('id')->on('step')->onDelete('cascade');
                       
                        $table->timestamps('created_at');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('stepdetail');
	}

}
