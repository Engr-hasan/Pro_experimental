<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    protected $table = 'questions';
    protected $fillable = [
        'id', 'question_subject', 'question_system', 'question_descriptions', 'question_related_picture', 'question_title', 'status', 'created_at', 'updated_at'
    ];
}
