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
}
