<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddingAboutMeAndCountryAndOccupationWebsiteContactNumber2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('about_me');
            $table->string('country');
            $table->string('occupation');
            $table->string('website');
            $table->bigInteger('contact_number_2');
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
            $table->dropColumn('about_me');
            $table->dropColumn('country');
            $table->dropColumn('occupation');
            $table->dropColumn('website');
            $table->dropColumn('contact_number_2');
        });
    }
}
