<?php

use Illuminate\Database\Migrations\Migration;

class AddAuthors extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        DB::table('authors')->insert(array(
            'name'=>'Yahya Erturan',
            'bio'=>'Yahya Erturan is a great author!',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_At'=>date('Y-m-d H:m:s')
          ));

        DB::table('authors')->insert(array(
            'name'=>'Ayşenur Erturan',
            'bio'=>'Ayşenur Erturan will be a great author as well.',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_At'=>date('Y-m-d H:m:s')
          ));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('authors')->where('name','=','Yahya Erturan')->delete();
        DB::table('authors')->where('name','=','Ayşenur Erturan')->delete();
	}

}