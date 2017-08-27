<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserItem extends Model
{
    protected $fillable = [
        'title', 'description', 'thumbnail', 'price', 'item_id', 'user_id', 'insured'
    ];
}
