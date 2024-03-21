<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UrlGenTracking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'url_gens_id',
        'ip',
        'is_processed'
    ];
}
