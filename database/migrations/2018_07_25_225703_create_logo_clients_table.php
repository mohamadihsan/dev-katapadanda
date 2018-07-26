<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogoClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logo_clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('client_name_var', 80);
            $table->string('logo_img_var', 50);
            $table->integer('width_on_pixel_int')->nullable();
            $table->integer('height_on_pixel_int')->nullable();
            $table->string('created_by_var')->nullable()->default('SANS');
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
        Schema::dropIfExists('logo_clients');
    }
}
