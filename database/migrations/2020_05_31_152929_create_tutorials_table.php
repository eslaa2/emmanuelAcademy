<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutorialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutorials', function (Blueprint $table) {
             $table->id();
            $table->unsignedBigInteger("class_id");
            $table->unsignedBigInteger('subject_id');
            $table->unsignedBigInteger('author_id');
            $table->String('topic');
            $table->String('description');
            $table->longText('lesson_notes');


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
        Schema::dropIfExists('tutorials');
    }
}
