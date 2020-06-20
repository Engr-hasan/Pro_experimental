<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionCreatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_creates', function (Blueprint $table) {
            $table->id();
//            $table->unsignedBigInteger('question_mode_id');
            $table->unsignedBigInteger('subject_id');
            $table->unsignedBigInteger('system_id');
//            $table->string('test_mode_type');
            $table->text('question');
            $table->integer('status')->nullable();
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
        Schema::dropIfExists('question_creates');
    }
}
