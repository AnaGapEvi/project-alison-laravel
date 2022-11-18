<?php

use App\Http\Controllers\AnswerController;
use App\Http\Controllers\auth\UserController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\FreeOnlineCourseController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\SocialAuthController;
use App\Http\Controllers\SubjectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/get-categories', [CategoryController::class, 'index']);
Route::get('/program', [ProgramController::class, 'index']);
Route::get('/empower', [ProgramController::class, 'empower']);
Route::get('/publisher', [ProgramController::class, 'publisher']);
Route::get('/hubs', [ProgramController::class, 'hubs']);

Route::get('/get-skills', [SkillsController::class, 'index']);

Route::get('/careers', [CareerController::class, 'index']);

Route::get('/subjects/{id}', [SubjectController::class, 'subjects']);
Route::get('/sub-categories', [SubjectController::class, 'subCreate']);

Route::get('/courses/{id}', [CourseController::class, 'courses']);
Route::get('/courses', [CourseController::class, 'courseCreate']);
Route::get('/type-courses/{type}', [CourseController::class, 'typeCourse']);
Route::get('/language-filter/{language}', [CourseController::class, 'languageFilter']);
Route::get('/type-filter/{type}', [CourseController::class, 'typeFilter']);
Route::get('/yesterday-users', [CourseController::class, 'yesterdayUsers']);
Route::get('/find-search-course/{search}', [CourseController::class, 'findSearch']);
Route::get('/find-search-course-name/{name}', [CourseController::class, 'findSearchCourse']);

Route::get('/free-online', [FreeOnlineCourseController::class, 'freeOnlineCourseCreate']);
Route::get('/free-online-courses/{id}', [FreeOnlineCourseController::class, 'freeOnlineCourses']);

Route::get('/question-create', [QuestionController::class, 'questionCreate']);
Route::get('/get-question/{id}', [QuestionController::class, 'getQuestion']);


//Route::get('/answer', [AnswerController::class, 'answers']);
Route::get('/answers-create', [AnswerController::class, 'answersCreate']);

Route::get('/top-course/{type}', [CertificateController::class, 'topCourse']);
Route::get('/certificates', [CertificateController::class, 'index']);

Route::get('/auth/{provider}/callback', [SocialAuthController::class, 'redirectToProvider'])->where('provider', '.*');

Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/auth/{provider}', [UserController::class, 'redirectToProvider']);
Route::put('/forgot', [UserController::class, 'forgotPassword']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->group(function () {
    Route::get('/auth-user', [UserController::class, 'authUser']);
    Route::get('/logout', [UserController::class, 'logout']);
});
