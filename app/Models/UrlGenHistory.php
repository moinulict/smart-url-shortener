<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UrlGenHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'long_url',
        'short_url',
        'unique_id',
        'ip',
        'uuid',
        'deleted_from_ip',
    ];
}
