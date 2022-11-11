<?php

namespace App\Http\Controllers;

use Curl\Curl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AboutController extends Controller
{
    public function ourAs()
    {
        $url=Http::get('https://alison.com/about/our-story');
        $listItem = $url['result'];

        return response()->json($listItem);
//        $curl = new Curl();
//        $curl->get('https://alison.com/about/our-story');
//
//        $html = $curl->response;
//
//        return response()->json($html);
    }
}
