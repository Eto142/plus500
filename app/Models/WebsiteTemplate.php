<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteTemplate extends Model
{
    use HasFactory;

    protected $fillable = [
        'text_color',
        'data_background_color',
        'background_color',
    ];
}
