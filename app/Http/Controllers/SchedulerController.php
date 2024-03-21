<?php

namespace App\Http\Controllers;

use App\Models\UrlGenGeoLocation;
use App\Models\UrlGenTracking;
use App\Traits\IpLookUp;
use Illuminate\Http\Request;

class SchedulerController extends Controller
{
    use IpLookUp;

    public function trackingIpToGeoLocation()
    {
        $trackings = UrlGenTracking::where('is_processed', 0)->get(['id', 'ip', 'user_id', 'url_gens_id']);
        if ($trackings) {
            foreach ($trackings as $key => $value) {
                try {
                    $ipResponse = $this->getIpDetails($value->ip);
                    $content = $ipResponse->getContent();
                    $data = json_decode($content, true);
                    if ($data['status']) {

                        $data = $data['data'];
                        $genGeoData = [
                            "user_id" => $value->user_id,
                            "url_gen_tracking_id" => $value->id,
                            "url_gens_id" => $value->url_gens_id,
                            "ip" => $value->id,
                            "city" => $data['city'],
                            "country_name" => $data['country_name'],
                            "country_code" => $data['country_code'],
                            "postal" => $data['postal'],
                            "latitude" => $data['latitude'],
                            "longitude" => $data['longitude'],
                            "timezone" => $data['timezone'],
                            "continent_code" => $data['continent_code'],
                            "region" => $data['region'],
                            "isp" => $data['isp'],
                            "isp_organization" => $data['isp_organization'],
                        ];

                        UrlGenGeoLocation::create($genGeoData);
                        UrlGenTracking::where('id', $value->id)->update(['is_processed' => 1]);

                    }
                } catch (\Throwable $th) {
                    //throw $th;
                }
            }
        }
    }
}
