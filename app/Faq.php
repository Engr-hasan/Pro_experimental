<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
	protected $table = 'faqs';
    protected $fillable = [
        'id', 'faq_title', 'faq_description', 'status', 'created_at', 'updated_at'
    ];
}
