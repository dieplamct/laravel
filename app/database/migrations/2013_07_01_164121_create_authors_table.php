<?php

use Illuminate\Database\Migrations\Migration;

class CreateAuthorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('authors', function($table){
            $table->increments('id_author');
            $table->string('name');
            $table->text('bio');
            $table->timestamps(); // will automatically create fields of "created_at" and "updated_at" with datetime format.
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('authors');
	}

}