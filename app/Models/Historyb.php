<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Historyb extends Model
{
    protected $table = 'historyb';

    protected $fillable = [
        'user_id',
        'order_id',
        'purchase_date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}