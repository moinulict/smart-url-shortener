<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Http\Requests\ContactStoreRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\UrlGen;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class FrontController extends Controller
{
    public function index(){
        return view('front.index');
    }

    public function getURLGenHistory(){

        $items = UrlGen::where('uuid', request()->cookie('urlgenUUID'))->select('id', 'long_url', 'short_url', 'created_at')->latest()->get();

        return response()->json(['status' => 'success', 'message' => '', 'urlGens' => $items]);
    }

    public function removeURLGenHistory(){

        $items = UrlGen::where('uuid', request()->cookie('urlgenUUID'))->delete();

        return response()->json(['status' => 'success', 'message' => 'Your history has been deleted successfully']);
    }

    public function generateShortenUrl(Request $request)
    {

        $uniqueId = Helper::generate(6);

        $data = [
            "long_url" => $request->longUrl,
            "short_url" => 'https://urlgen.io/' . $uniqueId,
            "unique_id" => $uniqueId,
            "ip" => $request->ip(),
            "uuid" => request()->cookie('urlgenUUID'),
            "user_id" => Auth::user()->id
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
