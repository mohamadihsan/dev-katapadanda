<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestimoniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimonies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('feedback_txt');
            $table->string('fullname_var');
            $table->string('from_var', 80)->nullable();
            $table->integer('start_level_int')->default(5);
            $table->string('photo_var', 50)->nullable();
            $table->string('width_on_pixel_int')->nullable();
            $table->string('height_on_pixel_int')->nullable();
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
        Schema::dropIfExists('testimonies');
    }
}
