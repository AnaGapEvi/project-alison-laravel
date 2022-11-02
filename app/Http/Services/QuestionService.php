<?php

namespace App\Http\Services;

use App\Models\Question;
use Curl\Curl;
use voku\helper\HtmlDomParser;

class QuestionService
{
    public function createQuestion(string $url, int $id):bool
    {
        $curl = new Curl();
        $curl->get($url);

        $html = $curl->response;

        $htmlDomParser = HtmlDomParser::str_get_html($html);

        $itemElements = $htmlDomParser->findOne("#search-heading > div.faq-wrapper");
        $titles = $itemElements->find('.question')->text();
        for ($i=0; $i<count($titles); $i++) {
            Question::create([
                'title' => $titles[$i],
                'category_id'=>$id
            ]);
        }

        return true;
    }



}
