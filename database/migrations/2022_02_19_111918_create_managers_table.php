<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('managers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('founder_id')->unsigned();
            $table->string('name');
            $table->integer('age');
            $table->integer('salary');
            $table->string('gender');
            $table->string('job-title');
            $table->date('hired-date');
            $table->timestamps();
            $table->foreign('founder_id')->references('id')->on('founders')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('managers');
    }
}
