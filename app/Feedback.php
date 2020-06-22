<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'feedback';
    protected $fillable = [
        'id', 'gen_test_id', 'feedbacks', 'i_concern', 'status', 'created_at', 'updated_at'
    ];
}
