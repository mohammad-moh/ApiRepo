<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Bardmigrate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bards', function (Blueprint $table) {
            $table->bigInteger('stu_id')->unsigned();
            $table->foreign('stu_id')->references('id')->on('students')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bards', function (Blueprint $table) {
            //
        });
    }
}