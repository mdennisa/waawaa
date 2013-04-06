<?php

class Add_Fb_Uid_To_Users_Table {    

	public function up()
  {
		Schema::table('users', function($table) {
			$table->string('fb_uid', 100);
      $table->string('fb_url');
	  });

  }    

	public function down()
  {
		Schema::table('users', function($table) {
			$table->drop_column('fb_uid');
      $table->drop_column('fb_url');
	  });

  }

}