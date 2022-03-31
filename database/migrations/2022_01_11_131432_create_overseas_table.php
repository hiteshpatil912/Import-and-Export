<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOverseasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('overseas', function (Blueprint $table) {
            $table->id();
            $table->string('series_Refreance');
            $table->string('period');
            $table->string('data_Value');
            $table->string('status');
            $table->string('units');
            $table->string('magntude');
            $table->string('subject');
            $table->string('group');
            $table->string('series_title_1');
            $table->string('series_title_2');
            $table->string('series_title_3');
            $table->string('series_title_4');
            $table->string('series_title_5');
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
        Schema::dropIfExists('overseas');
    }
}
