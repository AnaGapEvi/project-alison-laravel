<?php

namespace App\Http\Services;

use App\Models\Answer;
use App\Models\Category;
use App\Models\Question;
use Curl\Curl;
use voku\helper\HtmlDomParser;

class QuestionService
{
    private $htmlDomParser;

    public function createQuestion()
    {
        $categories = Category::all();
        $curl = new Curl();

        foreach ($categories as $category) {
            $curl->get($category->url);
            $this->htmlDomParser = HtmlDomParser::str_get_html($curl->response);
            $this->create($category->id);
        }
    }
    public function create(int $id):bool
    {
        $itemElements = $this->htmlDomParser->findOne("#search-heading > div.faq-wrapper");
        $titles = $itemElements->find('.question')->text();

        $answer = $itemElements->find('.answer');

        for ($i=0; $i<count($titles); $i++) {
            $question = Question::create([
                'title' => $titles[$i],
                'category_id'=>$id
            ]);

            $this->createAnswer($question->id, $answer[$i]);
        }

        return true;
    }

    public function createAnswer(int $id, $answer):bool
    {
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
        return true;
    }

}
