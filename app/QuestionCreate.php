<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionCreate extends Model
{
    protected $guarded = ['id'];

    public function scopeActive($query){
        $query->where('status',1)->latest();
    }
}
