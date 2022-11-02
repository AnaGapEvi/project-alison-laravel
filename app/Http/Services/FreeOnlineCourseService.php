<?php

namespace App\Http\Services;

use App\Models\FreeOnlineCourse;
use Curl\Curl;
use voku\helper\HtmlDomParser;

class FreeOnlineCourseService
{
    public function createFreeOnlineCourse(string $url, int $id): bool
    {
        $curl = new Curl();
        $curl->get($url);

        $html = $curl->response;

        $htmlDomParser = HtmlDomParser::str_get_html($html);

        $itemElements = $htmlDomParser->findOne("#search > div.wrapper > div.search-tab > div.search-results-container > div.wrapper.listing-results-tabs > div");
        $title = $itemElements->find('h1')->text();
        $content = $itemElements->find('p')->text();

        FreeOnlineCourse::create([
            'title'=>$title[0],
            'content'=>$content[0],
            'category_id'=>$id
        ]);

        return true;
    }

}
