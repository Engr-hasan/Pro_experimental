<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionMode extends Model
{
    protected $guarded = ['id'];

    public function scopeActive($query){
        $query->where('status',1);
    }
}
