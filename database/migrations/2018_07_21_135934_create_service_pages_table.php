<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_pages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title_var');
            $table->text('subtitle_txt')->nullable();
            $table->string('service_name_var');
            $table->text('service_desc_txt')->nullable();
            $table->string('service_icon_var')->nullable();
            $table->string('created_by_var')->nullable();
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
        Schema::dropIfExists('service_pages');
    }
}
