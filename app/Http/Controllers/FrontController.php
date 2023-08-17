<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\UniqueIdHelper;

class FrontController extends Controller
{
    public function generateShortenUrl(){
        $uniqueId = UniqueIdHelper::generate();
        

        return response()->json(['status', $uniqueId]);
    }
}
