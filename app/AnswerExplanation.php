<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnswerExplanation extends Model
{
    protected $guarded = ['id'];

    public function question(){
        return $this->belongsTo(QuestionCreate::class, 'question_create_id');
    }
    public function answer(){
        return $this->belongsTo(QuestionAnswersList::class, 'question_answer_list_id');
    }
}
