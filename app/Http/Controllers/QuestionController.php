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
        $questionService->createQuestion();
        return response()->json(['message'=>'Course already created']);
    }
    public function getQuestion($id):JsonResponse
    {
        $questions = Question::where('category_id',$id)->with('answers')->get();

        return response()->json([$questions]);
    }
}
