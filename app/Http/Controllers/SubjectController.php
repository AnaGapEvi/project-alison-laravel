<?php

namespace App\Http\Controllers;

use App\Http\Services\SubjectsService;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\JsonResponse;

class SubjectController extends Controller
{
    public function subjects($id):JsonResponse
    {
        $subjects = Subject::where('category_id', '=', $id)->with('category')->get();

        return response()->json($subjects);
    }
    public function subCreate(SubjectsService $subjectsService):JsonResponse
    {
        $urls = [
            'https://api.alison.com/v0.1/categories/sub-categories?category=it&locale=en',
            'https://api.alison.com/v0.1/categories/sub-categories?category=health&locale=en',
            'https://api.alison.com/v0.1/categories/sub-categories?category=language&locale=en',
            'https://api.alison.com/v0.1/categories/sub-categories?category=business&locale=en',
            'https://api.alison.com/v0.1/categories/sub-categories?category=management&locale=en',
            'https://api.alison.com/v0.1/categories/sub-categories?category=personal-development&locale=en',
            'https://api.alison.com/v0.1/categories/sub-categories?category=marketing&locale=en',
            'https://api.alison.com/v0.1/categories/sub-categories?category=engineering&locale=en',
            'https://api.alison.com/v0.1/categories/sub-categories?category=education&locale=en'
        ];

        foreach ($urls as $id => $url) {
            $subjectsService->createSubject($url, $id+1);
        }

        return response()->json(['message'=>'Subjects already created']);
    }
}
