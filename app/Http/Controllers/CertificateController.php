<?php

namespace App\Http\Controllers;

use App\Http\Services\CertificatesService;
use App\Models\Certificate;
use Illuminate\Http\JsonResponse;

class CertificateController extends Controller
{
    public function index(CertificatesService $certificatesService):JsonResponse
    {
        $urls = [
            ['url'=>'https://api.alison.com/v0.1/search?locale=en&page=1&size=12&order=default', 'type' =>'Popular Course'],
            ['url'=>'https://api.alison.com/v0.1/search?locale=en&page=1&size=12&type=diploma', 'type' =>'Top Diplomas'],
            ['url'=>'https://api.alison.com/v0.1/search?locale=en&page=1&size=12&type=certificate', 'type' =>'Top Certificates'],
            ['url'=>'https://api.alison.com/v0.1/search?locale=en&page=1&size=12&order=released-desc', 'type' =>'New Courses'],
        ];

        foreach ($urls as $url) {
            $certificatesService->createCertificates($url['url'], $url['type']);
        }
        return response()->json(['message'=>'Already created']);
    }

    public function topCourse($type): JsonResponse
    {
        $certificates = Certificate::where('type', $type)->get();

        return response()->json($certificates);
    }

}
