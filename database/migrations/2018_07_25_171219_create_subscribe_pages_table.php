<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscribePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscribe_pages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title_var');
            $table->text('subtitle_txt')->nullable();
            $table->string('placeholder_var')->nullable();
            $table->string('button_name_var')->nullable();
            $table->string('language_var', 3)->default('INA');
            $table->string('created_by_var')->default('SANS');
            $table->boolean('active_boo')->default(TRUE);
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
        Schema::dropIfExists('subscribe_pages');
    }
}
