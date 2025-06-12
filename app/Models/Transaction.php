<?php
// app/Models/Transaction.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'currency_type',      // e.g., ETH, BTC
        'crypto_amount',       // amount in crypto currency
        'transaction_type',    // ADD or SUBTRACT
        'usd_value',
        'usdt_balance',
        'btc_balance',           // equivalent value in USD
    ];

    /**
     * Get the user associated with the transaction.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
