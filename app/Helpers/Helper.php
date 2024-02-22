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
}
