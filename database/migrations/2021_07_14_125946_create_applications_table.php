<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('address');
            $table->string('email');
            $table->string('telephone');
            $table->string('dob');
            $table->string('pob');
            $table->string('gender');
            $table->string('marital_status');
            $table->string('nationality');
            $table->string('first_language');
            $table->string('correspondence_language');
            $table->string('documents');
            $table->string('institution');
            $table->string('first_choice');
            $table->string('second_choice')->nullable();
            $table->string('third_choice')->nullable();
            $table->string('doc1');
            $table->string('doc2');
            $table->string('doc3');
            $table->string('doc4');
            $table->string('doc5');
            $table->string('previous_inst1')->nullable();
            $table->string('previous_inst2')->nullable();
            $table->string('previous_inst3')->nullable();
            $table->string('previous_inst4')->nullable();
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
        Schema::dropIfExists('applications');
    }
}
