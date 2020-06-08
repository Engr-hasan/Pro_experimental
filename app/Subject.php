<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = 'subjects';
    protected $fillable = [
        'id', 'subject_name', 'status', 'created_at', 'updated_at'
    ];
}
