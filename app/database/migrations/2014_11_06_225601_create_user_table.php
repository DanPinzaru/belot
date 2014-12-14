<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::statement("CREATE TABLE db_belot.user (
  			id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  			email VARCHAR(45) NOT NULL,
  			first_name VARCHAR(45) NOT NULL,
  			last_name VARCHAR(45) NOT NULL,
  			date_of_birth DATE NOT NULL,
  			user_type VARCHAR(45) NOT NULL,
  			created_at TIMESTAMP NOT NULL,
  			updated_at TIMESTAMP NOT NULL,
  			remember_token VARCHAR(100) NOT NULL,
  			PRIMARY KEY (id),
  			UNIQUE INDEX email_UNIQUE (email ASC));");
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::statement("DROP TABLE db_belot.user");
	}

}
