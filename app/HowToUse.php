<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HowToUse extends Model
{
    protected $table = 'how_to_uses';
    protected $fillable = [
        'id', 'how_to_use_title', 'how_to_use_description', 'status', 'created_at', 'updated_at'
    ];
}
