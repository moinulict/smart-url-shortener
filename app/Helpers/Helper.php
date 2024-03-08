<?php

namespace App\Helpers;

use Illuminate\Support\Facades\DB;

class Helper
{
    public static function generate($length = 5, $table = 'url_gens', $column = 'unique_id')
    {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz';
        $uniqueId = '';

        do {
            for ($i = 0; $i < $length; $i++) {
                $uniqueId .= $characters[random_int(0, strlen($characters) - 1)];
            }

            $existingId = DB::table($table)->where($column, $uniqueId)->exists();
        } while ($existingId);

        return $uniqueId;
    }

    public static function getCaptchaResponse($requestData = [])
    {
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $data = [
            'secret' => config('services.recaptcha.secret'),
            'response' => $requestData['recaptcha'],
            'remoteip' => $_SERVER['REMOTE_ADDR']
        ];
        $options = [
            'http' => [
                'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                'method' => 'POST',
                'content' => http_build_query($data)
            ]
        ];
        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        return json_decode($result);
    }

    public static function formatTimeDifference($createdAt)
    {
        $currentTime = time(); // Current timestamp
        $createdAt = strtotime($createdAt); // Convert createdAt to timestamp
        $timeDifference = $currentTime - $createdAt;
    
        // Define time intervals for formatting
        $intervals = [
            ['label' => 'day', 'seconds' => 86400],
            ['label' => 'hour', 'seconds' => 3600],
            ['label' => 'minute', 'seconds' => 60],
            ['label' => 'second', 'seconds' => 1]
        ];
    
        // Format the time difference
        $result = '';
        foreach ($intervals as $interval) {
            $count = floor($timeDifference / $interval['seconds']);
            if ($count > 0) {
                $result .= $count . ' ' . ($count === 1 ? $interval['label'] : $interval['label'] . 's') . ' ago';
                break;
            }
        }
    
        return $result;
    }
}
