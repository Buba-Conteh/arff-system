<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmbulancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ambulances', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('patient_name');
            $table->string('patient_address');
            $table->string('caller_name');
            $table->string('time_collected');
            $table->string('depature_time');
            $table->string('hospital_arrival_time');
            $table->string('handed_time');
            $table->foreignId('crew_id')->on('crews');
            $table->string('Officer_in_charge');
            $table->string('crew_commander');
            $table->timestamps();
        });
    }

    /**
     * 
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ambulances');
    }
}
