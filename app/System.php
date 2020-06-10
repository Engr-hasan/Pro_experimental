<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class System extends Model
{
    protected $table = 'systems';
    protected $fillable = [
        'id', 'system_name', 'status', 'created_at', 'updated_at'
    ];

    public function scopeSystem($query){
        $query->where('status',1)->latest();
    }
    public function scopeActive($query){
        $query->where('status',1)->latest();
    }
}
