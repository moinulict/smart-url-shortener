<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UrlGen extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'long_url',
        'short_url',
        'unique_id',
        'ip',
    ];
}
