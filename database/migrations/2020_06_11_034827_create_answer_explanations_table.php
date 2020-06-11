<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswerExplanationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer_explanations', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('question_create_id');
            $table->unsignedInteger('question_answer_list_id');
            $table->string('topic');
            $table->string('statistics')->nullable();
            $table->text('time_spent')->nullable();
            $table->text('last_update')->nullable();
            $table->text('image_url')->nullable();
            $table->text('explanation')->nullable();
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
        Schema::dropIfExists('answer_explanations');
    }
}
