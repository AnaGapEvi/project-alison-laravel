<?php

namespace App\Http\Controllers;

use App\Http\Services\QuestionService;
use App\Models\Question;
use Curl\Curl;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use voku\helper\HtmlDomParser;

class QuestionController extends Controller
{
    public function questionCreate(QuestionService $questionService): JsonResponse
    {
        $urls = [
            'https://alison.com/courses/it',
            'https://alison.com/courses/health',
            'https://alison.com/courses/language',
            'https://alison.com/courses/business',
            'https://alison.com/courses/management',
            'https://alison.com/courses/personal-development',
            'https://alison.com/courses/marketing',
            'https://alison.com/courses/engineering',
            'https://alison.com/courses/education'
        ];
        foreach ($urls as $id => $url) {
            $questionService->createQuestion($url, $id+1);
        }

        return response()->json(['message'=>'Course already created']);
    }
    public function getQuestion($id):JsonResponse
    {
        $questions = Question::with(['answers' => function ($q) {
            $q->whereIn('type', ['p', 'li']);
        }])->where('category_id',$id)->get();

        return response()->json([$questions]);
    }
}
