<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnOnContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contacts', function (Blueprint $table) { 
            $table->string('account_twitter_url_var')->nullable()->after('map_txt');
            $table->string('account_facebook_url_var')->nullable()->after('account_twitter_url_var');
            $table->string('account_intagram_url_var')->nullable()->after('account_facebook_url_var');
            $table->string('account_youtube_url_var')->nullable()->after('account_intagram_url_var');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contacts', function (Blueprint $table) {
            $table->dropColumn(['account_twitter_url_var', 'account_facebook_url_var', 'account_intagram_url_var', 'account_youtube_url_var']);
        });
    }
}
