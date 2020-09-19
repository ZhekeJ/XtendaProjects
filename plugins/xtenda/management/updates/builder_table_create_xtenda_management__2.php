<?php namespace Xtenda\Management\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateXtendaManagement2 extends Migration
{
    public function up()
    {
        Schema::create('xtenda_management_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 191);
            $table->string('role', 65535);
            $table->text('experience');
            $table->text('bio');
            $table->text('education');
            $table->boolean('active');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('linkedin', 191)->nullable();
            $table->string('slug', 191)->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('xtenda_management_');
    }
}
