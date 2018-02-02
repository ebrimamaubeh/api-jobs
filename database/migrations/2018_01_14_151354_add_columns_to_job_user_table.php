<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToJobUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('job_user', function (Blueprint $table) {
        //   $table->integer('job_id')->unsigned();
        //   $table->foreign('job_id')->references('id')->on('jobs');
        //   $table->integer('user_id')->unsigned();
        //   $table->foreign('user_id')->references('id')->on('users');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('job_user', function (Blueprint $table) {
            //
        });
    }
}
