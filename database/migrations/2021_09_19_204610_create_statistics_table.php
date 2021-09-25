<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatisticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statistics', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->integer('week_id')->nullable();
            $table->integer('subject_id')->nullable();
            $table->integer('class_id')->nullable();
            $table->integer('institution_id')->nullable();
            $table->integer('hours_previewed')->nullable();
            $table->integer('hours_taught')->nullable();
            $table->integer('chapters_previewed')->nullable();
            $table->integer('chapters_taught')->nullable();
            $table->integer('total_students')->nullable();
            $table->integer('total_boys')->nullable();
            $table->integer('total_girls')->nullable();
            $table->integer('boys_passed')->nullable();
            $table->integer('girls_passed')->nullable();
            $table->integer('percentage_passed')->nullable();
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
        Schema::dropIfExists('statistics');
    }
}
