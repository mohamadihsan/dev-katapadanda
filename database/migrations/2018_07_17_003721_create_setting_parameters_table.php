<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingParametersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setting_parameters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('setting_parameter_code_var', 2);
            $table->string('setting_parameter_value_var');
            $table->string('setting_parameter_measure_var', 30)->nullable();
            $table->text('setting_parameter_desc_txt')->nullable();
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
        Schema::dropIfExists('setting_parameters');
    }
}
