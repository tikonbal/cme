<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('first_name');
                        $table->stritg('Last_name');
			$table->string('email')->unique();
			$table->string('password', 60);
                        $table->foreign('user_type')->references('id')->on('usertype')->onDelete('cascade');
			$table->rememberToken();
			$table->timestamps('create_at');
		});
	}

	/**
	 * Reverse the migrations.l
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user');
	}

}
