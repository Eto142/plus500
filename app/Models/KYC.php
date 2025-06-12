<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KYC extends Model
{
    protected $fillable = [
        'user_id',
        'document_type',
        'other_document',
        'document_path',
        'status',
    ];

    /**
     * Relationship: KYC belongs to a user.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
