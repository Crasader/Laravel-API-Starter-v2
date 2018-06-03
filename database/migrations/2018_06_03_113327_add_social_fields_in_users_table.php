<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSocialFieldsInUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('provider')
                  ->after('verification_token')
                  ->default('app');
            $table->string('social_id')
                  ->after('provider')
                  ->nullable();
            $table->string('avatar')
                  ->after('social_id')
                  ->nullable();
            $table->string('avatar_original')
                  ->after('avatar')
                  ->nullable();
            $table->string('social_profile_url')
                  ->after('avatar_original')
                  ->nullable();
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('provider');
            $table->dropColumn('social_id');
            $table->dropColumn('avatar');
            $table->dropColumn('avatar_original');
            $table->dropColumn('social_profile_url');
        });
    }
}
