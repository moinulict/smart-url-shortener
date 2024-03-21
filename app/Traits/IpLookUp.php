<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

trait IpLookUp
{
    public function getIpDetails($ip)
    {
        try {
            $token = config('app.IP_LOOK_UP_TOKEN');
            $baseUrl = config('app.IP_LOOK_UP_DOMAIN');
    
            // Make the API call
            $response = Http::get($baseUrl . $ip . '/?token=' . $token);
    
            // Check if the request was successful
            if ($response->successful()) {
                // API call successful, return the response
                $data = json_decode($response, true);
    
                // Extracting required information
                $isp = @$data['traits']['isp'];
                $ispOrganization = @$data['traits']['autonomous_system_organization'];
                $city = @$data['city']['names']['en'];
                $continent = @$data['continent']['names']['en'];
                $continentCode = @$data['continent']['code'];
                $country = @$data['country']['names']['en'];
                $countryCode = @$data['country']['iso_code'];
                $latitude = @$data['location']['latitude'];
                $longitude = @$data['location']['longitude'];
                $timeZone = @$data['location']['time_zone'];
                $postalCode = @$data['postal']['code'];
                $subdivision1 = isset($data['subdivisions'][0]['names']['en']) ? $data['subdivisions'][0]['names']['en'] : null;
                $subdivision2 = isset($data['subdivisions'][1]['names']['en']) ? $data['subdivisions'][1]['names']['en'] : null;
                
                // Constructing the result array
                $result = [
                    'isp' => $isp,
                    'isp_organization' => $ispOrganization,
                    'city' => $city,
                    'continent' => $continent,
                    'continent_code' => $continentCode,
                    'country_code' => $countryCode,
                    'country_name' => $country,
                    'latitude' => $latitude,
                    'longitude' => $longitude,
                    'timezone' => $timeZone,
                    'postal' => $postalCode,
                    'region' => $subdivision1,
                    'subdivision2' => $subdivision2
                ];
                // Return the result as JSON
                return response()->json(['data' => $result, 'status' => true], $response->status());
            } else {
                // API call failed, return an error response
                return response()->json(['error' => 'Failed to fetch IP details', 'status' => false], $response->status());
            }
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage(), 'status' => false], $response->status());
        }

    }

}
