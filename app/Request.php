<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $fillable = [
        'sender_id', 'receiver_id', 'user_item_id', 'start_date', 'end_date'
    ];
}
