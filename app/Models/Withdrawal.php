<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdrawal extends Model
{
    use HasFactory;

    // Define the fields that are mass assignable
    protected $fillable = [
        'user_id',
        'method',
        'bank_name',
        'account_name',
        'account_number',
        'branch_name',
        'ifsc_code',
        'bank_address',
        'routing_number',
        'crypto',
        'wallet',
        'amount',
        'status',
        'transaction_id',
    ];

    // Optionally, define any relationships (e.g., to the User model)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
