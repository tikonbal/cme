<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntrepreneurshipTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('entrepreneurship', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name')->default('');
                        $table->string('details')->default('');
                        $table->string('status')->default('');
                        $table->foreign('owner_id')->references('id')->on('user')->onDelete('cascade');
                        $table->foreign('mentor_id')->references('id')->on('user');
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
		Schema::drop('entrepreneurship');
                
	}

}
