<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOurTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('our_teams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('position_code_var', 10)->nullable();
            $table->string('position_name_var', 100);
            $table->string('member_name_var', 100);
            $table->string('member_img_var', 50)->nullable();
            $table->text('note_txt')->nullable();
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
        Schema::dropIfExists('our_teams');
    }
}
