<?php

namespace App\Http\Controllers;

use Curl\Curl;
use Illuminate\Http\JsonResponse;
use voku\helper\HtmlDomParser;

class ProgramController extends Controller
{
    public function index():JsonResponse
    {
        $curl = new Curl();
        $curl->get('https://alison.com/programmes');

        $html = $curl->response;
        $htmlDomParser = HtmlDomParser::str_get_html($html);
        $itemList = [];

        $itemElements = $htmlDomParser->findOne("#programmes-section-2 > div > div > div.programmes-columns");

        $data = $itemElements->find('.programmes-column-item');
        foreach ($data as $i) {
            $image = $i->findOne("img")->getAttribute("src");
            $h2 = $i->findOne("h2")->text();
            $p = $i->findOne("p")->text();
            $itemList [] = [ 'image'=>$image, 'title'=>$h2, 'text'=>$p];
        }
        return response()->json($itemList);
    }

    public function empower():JsonResponse
    {
        $curl = new Curl();
        $curl->get('https://alison.com/empower-us');
        $html = $curl->response;
        $htmlDomParser = HtmlDomParser::str_get_html($html);
        $itemList = [];

        $itemElements = $htmlDomParser->findOne("#empower-page > div.wrapper > ul");

        $data = $itemElements->find('li');
        foreach ($data as $i) {
            $image = $i->findOne("img")->getAttribute("src");
            $h2 = $i->findOne("h3")->text();
            $p = $i->findOne("p")->text();
            $button = $i->findOne("a")->text();
            $itemList [] = [ 'image'=>$image, 'title'=>$h2, 'text'=>$p, 'btn'=>$button];
        }
        return response()->json($itemList);
    }
    public function publisher():JsonResponse
    {
        $curl = new Curl();
        $curl->get('https://alison.com/publishers');

        $html = $curl->response;
        $htmlDomParser = HtmlDomParser::str_get_html($html);
        $itemList = [];

        $itemElements = $htmlDomParser->findOne("#publishers");
        foreach ($itemElements as $i) {
            $image = $i->findOne("a > div > div > div > img")->getAttribute("src");
            $p = $i->findOne("a > div  > div > p")->text();
            $button = $i->findOne("a > div > div > div > p")->text();
            if($image!=='' AND $p!=='' AND $button!==''){
                $itemList [] = [ 'image'=>$image, 'text'=>$p, 'btn'=>$button];
            }
        }
        return response()->json($itemList);
    }
}
