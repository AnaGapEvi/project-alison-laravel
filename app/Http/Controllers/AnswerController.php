<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use Curl\Curl;
use Illuminate\Http\Request;
use voku\helper\HtmlDomParser;

class AnswerController extends Controller
{
    public function answers()
    {
        $curl = new Curl();
        $curl->get('https://alison.com/courses/it?type=certificate');

        $html = $curl->response;

        $htmlDomParser = HtmlDomParser::str_get_html($html);

        $itemElements = $htmlDomParser->findOne("#search-heading > div.faq-wrapper");

        $answers = $itemElements->find('.answer p')->text();
        $answerLi = $itemElements->find('.answer li')->text();

        for ($i=0; $i<count($answers); $i++) {
           Answer::create([
               'answer' => $answers[$i],
               'question_id' =>1,
               'type'=>'p',
            ]);
        }
        for ($i=0; $i<count($answerLi); $i++) {
            Answer::create([
                'answer' => $answerLi[$i],
                'question_id' =>1,
                'type'=>'li',
            ]);
        }

        return response()->json(['message'=>'Answers already created']);
    }
}
