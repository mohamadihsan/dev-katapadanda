<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnOnPortofolioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('portofolio', function (Blueprint $table) {
            $table->string('project_url_var')->nullable()->after('project_desc_txt');
            $table->string('show_button_link_boo')->nullable()->default(TRUE)->after('project_url_var');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('portofolio', function (Blueprint $table) {
            $table->dropColumn(['project_url_var', 'show_button_link_boo']);
        });
    }
}
