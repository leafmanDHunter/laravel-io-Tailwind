<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    protected $fillable = [
        'title',
        'preview',
        'author',
        'reply_count',
        'tags'
    ];
}
