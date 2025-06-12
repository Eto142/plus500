<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'deposit_type',
        'amount',
        'payment_mode',
        'status',
        'proof',
    ];

    // Optional: Define relationship with User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
