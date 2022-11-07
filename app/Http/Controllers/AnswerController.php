<?php

namespace App\Http\Controllers;

use App\Http\Services\AnswersService;
use App\Models\Answer;
use Curl\Curl;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use voku\helper\HtmlDomParser;

class AnswerController extends Controller
{
    public function answersCreate(AnswersService $answersService):JsonResponse
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
            $answersService->createAnswer($url, $id+1);
        }

        return response()->json(['message'=>'Answers already created']);
    }
}
