<?php

use App\Http\Controllers\AnswerController;
use App\Http\Controllers\auth\UserController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\FreeOnlineCourseController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\SocialAuthController;
use App\Http\Controllers\SubjectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/get-categories', [CategoryController::class, 'index']);

Route::get('/get-skills', [SkillsController::class, 'index']);

Route::get('/careers', [CareerController::class, 'index']);

Route::get('/subjects/{id}', [SubjectController::class, 'subjects']);
Route::get('/sub-categories', [SubjectController::class, 'subCreate']);

Route::get('/courses/{id}', [CourseController::class, 'courses']);
Route::get('/courses', [CourseController::class, 'courseCreate']);
Route::get('/diploma-courses', [CourseController::class, 'diplomaCourse']);
Route::get('/certificate-courses', [CourseController::class, 'certificateCourse']);
Route::post('/language-filter', [CourseController::class, 'languageFilter']);
Route::post('/type-filter', [CourseController::class, 'typeFilter']);
Route::get('/yesterday-users', [CourseController::class, 'yesterdayUsers']);
Route::post('/find-search-course', [CourseController::class, 'findSearch']);
Route::post('/find-search-course-name', [CourseController::class, 'findSearchCourse']);

Route::get('/question-create', [QuestionController::class, 'questionCreate']);
Route::get('/get-question/{id}', [QuestionController::class, 'getQuestion']);

Route::get('/answer', [AnswerController::class, 'answers']);

Route::get('/top-certificates', [CertificateController::class, 'topCertificates']);
Route::get('/popular-course', [CertificateController::class, 'popularCourse']);
Route::get('/top-diplomas', [CertificateController::class, 'topDiplomas']);
Route::get('/certificates', [CertificateController::class, 'index']);
Route::get('/new-courses', [CertificateController::class, 'newCourses']);
Route::get('/free-online', [FreeOnlineCourseController::class, 'freeOnlineCourseCreate']);
Route::get('/free-online-courses/{id}', [FreeOnlineCourseController::class, 'freeOnlineCourses']);

Route::get('/answers-create', [AnswerController::class, 'answersCreate']);

Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
Route::put('/forgot', [UserController::class, 'forgotPassword']);


Route::post('/auth/{provider}', [UserController::class, 'redirectToProvider']);
Route::get('/auth/{provider}/callback', [SocialAuthController::class, 'redirectToProvider'])->where('provider', '.*');

Route::middleware('auth:api')->group(function () {
    Route::get('/auth-user', [UserController::class, 'authUser']);
    Route::get('/logout', [UserController::class, 'logout']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
