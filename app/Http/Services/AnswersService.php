<?php

namespace App\Http\Services;

use App\Models\Answer;
use App\Models\Question;
use Curl\Curl;
use voku\helper\HtmlDomParser;

class AnswersService
{
    public function createAnswer(string $url, int $id):bool
    {
        $curl = new Curl();

        $curl->get($url);

        $html = $curl->response;

        $htmlDomParser = HtmlDomParser::str_get_html($html);

        $itemElements = $htmlDomParser->findOne("#search-heading > div.faq-wrapper");
        $answers = $itemElements->find('.answer');

        foreach ($answers as $answer) {
            foreach ($answer as $tag) {
                if ($tag->tag == 'p') {
                    Answer::create([
                        'answer' => $tag->text(),
                        'type' => 'p',
                        'question_id' => $id
                    ]);
                } else if ($tag->tag == 'ul') {
                    foreach ($tag->find('li')->text() as $li) {
                        Answer::create([
                            'answer' => $li,
                            'type' => 'li',
                            'question_id' => $id
                        ]);
                    };
                }
            }
        };

        return true;
    }
}
