<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHorsesTable extends Migration {

	
	public function up()
	{
		 Schema::create('horses', function($table)
    {
        $table->string('coat_color');
        $table->string('picture');
        
    });
	}

	
	public function down()
	{
	Schema::drop('horses');
	}

}
