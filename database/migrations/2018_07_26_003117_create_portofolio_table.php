<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortofolioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portofolio', function (Blueprint $table) {
            $table->increments('id');
            $table->string('project_code_var', 10)->nullable();
            $table->string('project_title_var', 100);
            $table->text('project_desc_txt')->nullable();
            $table->string('project_img_var', 50)->nullable();
            $table->text('project_feature_txt')->nullable();
            $table->string('position_class_var', 50)->nullable();
            $table->string('language_var', 3)->default('INA');
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
        Schema::dropIfExists('portofolio');
    }
}
