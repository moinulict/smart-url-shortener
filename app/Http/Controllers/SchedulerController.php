<?php

namespace App\Http\Controllers;

use App\Models\UrlGenTracking;
use App\Traits\IpLookUp;
use Illuminate\Http\Request;

class SchedulerController extends Controller
{
    use IpLookUp;

    public function trackingIpToGeoLocation()
    {
        $trackings = UrlGenTracking::where('is_processed', 0)->get(['id', 'ip', 'user_id', 'url_gens_id']);
        if($trackings){
            foreach ($trackings as $key => $value) {
                $ipResponse = $this->getIpDetails($value->ip);
                $genGeoData = [
                    "url_gen_tracking_id" => $value->id,
                    "url_gens_id" => $value->url_gens_id,
                    "ip" => $value->id,
                    "city" => $ipResponse['city'],
                    "country_name" => $ipResponse['country_name'],
                    "postal" => $ipResponse['postal'],
                    "latitude" => $ipResponse['latitude'],
                    "longitude" => $ipResponse['longitude'],
                    "timezone" => $ipResponse['timezone'],
                    "continent_code" => $ipResponse['continent_code'],
                    "region" => $ipResponse['region'],
                    "isp_organization" => $ipResponse['isp_organization'],
                ];
            }
        }
    }
}
