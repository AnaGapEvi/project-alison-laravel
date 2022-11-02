<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\JsonResponse;

class CareerController extends Controller
{
    public function index():JsonResponse
    {
        $careers = Career::get();

        return response()->json($careers);
    }
}
