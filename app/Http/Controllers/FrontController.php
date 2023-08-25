<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Http\Request;
use App\Models\UrlGen;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class FrontController extends Controller
{
    public function generateShortenUrl(Request $request)
    {
        $uniqueId = Helper::generate(6);

        $data = [
            "long_url" => $request->longUrl,
            "short_url" => 'https://urlgen.io/' . $uniqueId,
            "unique_id" => $uniqueId,
            "ip" => $request->ip()
        ];

        if ($item = UrlGen::create($data)) {
            return response()->json(['status' => 'success', 'message' => 'Your shorten URL has been generated successfully.', 'data' => $item], 200);
        }

        return response()->json(['status' => 'success', 'message' => 'Something went wrong please try again later']);
    }

    public function redirectToLongUrl($uniqueId)
    {
        if (!$uniqueId) {
            return abort(404);
        }

        $item = UrlGen::where('unique_id', $uniqueId)->first();
        if (!$item) {
            return abort(404);
        }

        return Redirect::away($this->ensureUrlProtocol($item->long_url));
    }

    public function ensureUrlProtocol($url)
    {
        if (!Str::startsWith($url, 'http://') && !Str::startsWith($url, 'https://')) {
            $url = 'http://' . $url; // Default to http:// if protocol is missing
        }

        return $url;
    }
}
