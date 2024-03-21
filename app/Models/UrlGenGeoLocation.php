<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UrlGenGeoLocation extends Model
{
    use HasFactory;

    protected $fillable = [
        'url_gens_id',
        'url_gen_tracking_id',
        'ip',
        'city',
        'region',
        'region_code',
        'country_code',
        'country_name',
        'continent_code',
        'continent',
        'postal',
        'latitude',
        'longitude',
        'timezone',
        'isp',
        'isp_organization',
    ];
}
