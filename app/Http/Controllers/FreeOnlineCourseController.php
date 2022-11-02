<?php

namespace App\Http\Controllers;

use App\Http\Services\FreeOnlineCourseService;
use App\Models\Course;
use App\Models\FreeOnlineCourse;
use Curl\Curl;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use voku\helper\HtmlDomParser;

class FreeOnlineCourseController extends Controller
{
    public function freeOnlineCourses($id):JsonResponse
    {
        $subjects = FreeOnlineCourse::where('category_id', '=', $id)->with('category')->get();

        return response()->json($subjects);
    }

    public function freeOnlineCourseCreate(FreeOnlineCourseService $freeOnlineCourseService):JsonResponse
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
            $freeOnlineCourseService->createFreeOnlineCourse($url, $id+1);
        }

        return response()->json(['message'=>'free courses already created']);
    }
}
