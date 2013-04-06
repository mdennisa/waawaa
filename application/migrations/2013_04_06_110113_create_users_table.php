<?php

class Create_Users_Table {    

	public function up()
  {
		Schema::create('users', function($table) {
			$table->increments('id');
      $table->string('username')->unique();
      $table->string('first_name');
      $table->string('last_name');
      $table->string('email')->unique();
      $table->string('hash');
      $table->string('password');
      $table->string('picture');
      $table->boolean('active');
      $table->text('about');
      $table->date('dob');
			$table->timestamps();
  	});

  }    

	public function down()
  {
		Schema::drop('users');
  }

}