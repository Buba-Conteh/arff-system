<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AnnualLeaves extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    public function up()
    {
        Schema::create('annual_leaves', function (Blueprint $table) {
            $table->id();
            $table->foreignId('personnel_id')->on('personnel');
            $table->string('start_date');
            $table->string('ende_date');
            $table->string('number_of_days');
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
        //
    }
}
