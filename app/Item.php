<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'name', 'description', 'thumbnail', 'price', 'category_id', 'user_id'
    ];
}
