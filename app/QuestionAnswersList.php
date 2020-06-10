<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionAnswersList extends Model
{
    protected $guarded = ['id'];

    public function scopeActive($query){
        $query->where('status',1)->latest();
    }

    public function question(){
        return $this->belongsTo(QuestionCreate::class, 'question_create_id');
    }
}
