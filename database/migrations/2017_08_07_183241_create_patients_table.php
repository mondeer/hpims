<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('national_id');
            $table->date('dob');
            $table->string('patient_id');
            $table->string('ward');
            $table->string('bed_no');
            $table->string('mobile');
            $table->string('address');
            $table->string('next_of_kin');
            $table->string('next_of_kin_contact');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
