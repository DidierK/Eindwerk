<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model {
    protected $fillable = [
        'renter_id', 'owner_id', 'user_item_id', 'start_date', 'end_date', 'status'
    ];
}
