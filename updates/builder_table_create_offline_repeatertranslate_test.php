<?php namespace OFFLINE\Repeatertranslate\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateOfflineRepeatertranslateTest extends Migration
{
    public function up()
    {
        Schema::create('offline_repeatertranslate_test', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->text('values');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('offline_repeatertranslate_test');
    }
}
