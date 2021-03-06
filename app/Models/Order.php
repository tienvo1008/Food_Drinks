<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = [
        'user_id',
        'date_order',
        'total',
        'payment',
        'status',
    ];

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function history()
    {
        return $this->belongsTo(History::class);
    }

    public function detailOders()
    {
        return $this->hasMany(DetailOrder::class);
    }
}
