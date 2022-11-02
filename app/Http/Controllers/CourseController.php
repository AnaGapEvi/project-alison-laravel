<?php

namespace App\Http\Controllers;

use App\Http\Services\CoursesService;
use App\Models\Category;
use App\Models\Course;
use Curl\Curl;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use voku\helper\HtmlDomParser;

class CourseController extends Controller
{
    public function diplomaCourse():JsonResponse
    {
        $data= Course::where('type', 'Diploma')
            ->with('category')
            ->get();

        return response()->json($data);
    }
    public function certificateCourse():JsonResponse
    {
        $data= Course::where('type', 'Certificate')
            ->with('category')
            ->get();

        return response()->json($data);
    }
    public function languageFilter(Request $request):JsonResponse
    {
        $data= Course::where('language', $request->tr)
            ->with('category')
            ->get();

        return response()->json($data);
    }
    public function typeFilter(Request $request):JsonResponse
    {
        $data= Course::where('type', $request->type)
            ->with('category')
            ->get();

        return response()->json($data);
    }
    public function courses($id):JsonResponse
    {
        $courses = Course::with('category')->where('category_id', '=', $id)->with('category')->get();

        return response()->json($courses);
    }
    public function yesterdayUsers():JsonResponse
    {
        $url=Http::get('https://api.alison.com/v0.1/google-analytics/yesterday-users');
        $listItem = $url['result'];

        return response()->json($listItem);
    }

    public function courseCreate(CoursesService $coursesService): JsonResponse
    {
        $urls = [
            'https://api.alison.com/v0.1/search?locale=en&language=id&order=default&type=diploma&size=60&page=1',
            'https://api.alison.com/v0.1/search?locale=en&language=es&order=default&type=diploma&size=60&page=1',
            'https://api.alison.com/v0.1/search?locale=en&language=es-LA&order=default&type=diploma&size=60&page=1',
            'https://api.alison.com/v0.1/search?locale=es&language=en&order=default&category=it&size=20&page=1',
            'https://api.alison.com/v0.1/search?locale=en&language=en&order=default&category=health&size=20&page=1',
            'https://api.alison.com/v0.1/search?locale=en&language=en&order=default&category=language&size=20&page=1',
            'https://api.alison.com/v0.1/search?locale=en&language=en&order=default&category=business&size=20&page=1',
            'https://api.alison.com/v0.1/search?locale=en&language=en&order=default&category=management&size=20&page=1',
            'https://api.alison.com/v0.1/search?locale=en&language=en&order=default&category=personal-development&size=20&page=1',
            'https://api.alison.com/v0.1/search?locale=en&language=en&order=default&category=marketing&size=20&page=1',
            'https://api.alison.com/v0.1/search?locale=en&language=en&order=default&category=engineering&size=20&page=1',
            'https://api.alison.com/v0.1/search?locale=en&language=en&order=default&category=education&size=20&page=1'
        ];
        foreach ($urls as $id => $url) {
            $coursesService->createCourse($url, $id+1);
        }

        return response()->json(['message'=>'Course already created']);
    }

    public function question()
    {
        $curl = new Curl();
        $curl->get('https://alison.com/courses/it?type=certificate');

        $html = $curl->response;

        $htmlDomParser = HtmlDomParser::str_get_html($html);
        $itemList = [];

        $itemElements = $htmlDomParser->findOne("#search-heading > div.faq-wrapper");
        $titles = $itemElements->find('.question')->text();
        $answers = $itemElements->find('.answer');

        for ($i=0; $i<count($titles); $i++) {
            $itemList[] = [
                'title' => $titles[$i],
                'answers' => [
                    'p' => $answers[$i]->find('p')->text(),
                    'li' => $answers[$i]->find('li')->text(),
                ]
            ];
        }

        return response()->json($itemList);
    }
    public function findSearch(Request $request)
    {
        $search = $request->search;

        $category = Course::whereHas('category', function ($q) use ($search) {
            $q->where('name', 'LIKE', '%' . $search . '%');
        })->with(['category' => function ($q) use ($search) {
            $q->where('name', 'LIKE', '%' . $search . '%');
        }])->get();

        if( count( $category ) >= 1){
            return response()->json( $category );
        }

        $test = Course::with('category')
            ->where( 'name', 'LIKE', '%' . $request->search . '%' )
            ->orWhere ( 'type', 'LIKE', '%' . $request->search . '%' )
            ->get();

        if (count ( $test ) > 0){
            return response()->json( $test );
        }

        return response()->json( ['message'=> "Sorry there are no results. Try something different"]);
    }
    public function findSearchCourse(Request $request)
    {
        $category = Category::where( 'name', 'LIKE', '%' . $request->search . '%' )->with('courses')->get();

        if(count($category) > 0){
            return response()->json( $category );
        }

        $test = Course::with('category')
            ->where( 'name', 'LIKE', '%' . $request->search . '%' )
            ->orWhere ( 'type', 'LIKE', '%' . $request->search . '%' )
            ->get ();

        if (count ( $test ) > 0){
            return response()->json( $test );
        }

        return response()->json( ['message'=>"Sorry there are no results. Try something different"]);
    }
}
