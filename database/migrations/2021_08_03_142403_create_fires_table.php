<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFiresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fires', function (Blueprint $table) {
            $table->id();
            $table->string('fire_date');
            $table->string('call_time');
            $table->string('depature_time');
            $table->string('call_nature');
            $table->string('fire_nature');
            $table->string('materials_involve');
            $table->string('fire_caurse');
            $table->foreignId('fire_medium_id')->on('fire_mediums');
            $table->foreignId('crew_id')->on('crews');
            $table->string('extinction_time');
            $table->string('crew_commanders_comment');
            $table->string('pdf_url')->nullable();
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
        Schema::dropIfExists('fires');
    }
}
