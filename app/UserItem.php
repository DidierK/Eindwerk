<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserItem extends Model
{
    protected $fillable = [
        'description', 'thumbnail', 'price', 'item_id', 'user_id'
    ];
}
