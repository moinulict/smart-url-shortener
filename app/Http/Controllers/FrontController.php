<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Http\Requests\ContactStoreRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\UrlGen;
use App\Models\UrlGenHistory;
use App\Models\UrlGenTracking;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.index');
    }

    public function getURLGenHistory()
    {

        $items = UrlGen::where('uuid', request()->cookie('SmartURLShortenerUUID'))->select('id', 'long_url', 'short_url', 'created_at')->latest()->get();

        return response()->json(['status' => 'success', 'message' => '', 'urlGens' => $items]);
    }

    public function removeURLGenHistory(Request $request)
    {
        try {
            DB::beginTransaction();
            $itemsToMove = UrlGen::where('uuid', request()->cookie('SmartURLShortenerUUID'))->get();
            foreach ($itemsToMove as $item) {
                UrlGenHistory::create([
                    'user_id' => $item->user_id,
                    'long_url' => $item->long_url,
                    'short_url' => $item->short_url,
                    'unique_id' => $item->unique_id,
                    'ip' => $item->ip,
                    'uuid' => $item->uuid,
                    'deleted_from_ip' => $request->ip(),
                ]);
            }

            UrlGen::where('uuid', request()->cookie('SmartURLShortenerUUID'))->delete();
            DB::commit();
            return response()->json(['status' => 'success', 'message' => 'Your history has been deleted successfully']);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['status' => false, 'error' => $e->getMessage()], 500);
        }
    }

    public function generateShortenUrl(Request $request)
    {

        $captchaResponse = Helper::getCaptchaResponse(["recaptcha" => $request['g-recaptcha-response']]);
        if ($captchaResponse->success != true || $captchaResponse->score <= 0.3) {
            return response()->json(['status' => false, 'message' => 'Sorry but, reCaptcha error.']);
        }

        $uniqueId = Helper::generate(6);

        $data = [
            "long_url" => $request->longUrl,
            "short_url" => config('app.short_url_domain') . $uniqueId,
            "unique_id" => $uniqueId,
            "ip" => $request->ip(),
            "uuid" => request()->cookie('SmartURLShortenerUUID'),
            "user_id" => @Auth::user()->id
        ];

        if ($item = UrlGen::create($data)) {
            return response()->json(['status' => 'success', 'message' => 'Your shorten URL has been generated successfully.', 'data' => $item], 200);
        }

        return response()->json(['status' => false, 'message' => 'Something went wrong please try again later']);
    }

    public function redirectToLongUrl(Request $request, $uniqueId)
    {
        if (!$uniqueId) {
            return abort(404);
        }

        $item = UrlGen::where('unique_id', $uniqueId)->first();
        if (!$item) {
            return abort(404);
        }

        $urlGenTrackingData = [
            "user_id" => @$item->user_id,
            "url_gens_id" => @$item->id,
            "ip" => $request->ip(),
        ];
        UrlGenTracking::create($urlGenTrackingData);

        return Redirect::away($this->ensureUrlProtocol($item->long_url));
    }

    public function ensureUrlProtocol($url)
    {
        if (!Str::startsWith($url, 'http://') && !Str::startsWith($url, 'https://')) {
            $url = 'http://' . $url; // Default to http:// if protocol is missing
        }

        return $url;
    }

    public function postContact(ContactStoreRequest $request)
    {
        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->subject = $request->input('subject');
        $contact->email = $request->input('email');
        $contact->message = $request->input('message');
        $contact->save();

        return Redirect::back()->with('message', 'Your message has been sent successfully.');
    }
}
