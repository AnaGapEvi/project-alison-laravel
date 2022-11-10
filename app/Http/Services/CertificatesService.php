<?php

namespace App\Http\Services;

use App\Models\Certificate;
use Illuminate\Support\Facades\Http;

class CertificatesService
{
        public function createCertificates(string $url, string $type): bool
        {
            $url = Http::get($url);
            $listItem = $url['result'];
            $certificates = [];

            foreach ($listItem as $item){
                $certificates[] = [
                    'image'=>$item['courseImgUrl'],
                    'headline'=>$item['headline'],
                    'description'=>$item['headline'],
                    'language'=>$item['language'],
                    'name'=>$item['name'],
                    'publish_name'=>$item['publisher_name'],
                    'type'=>$type
                ];
            }

            return Certificate::insert($certificates);
        }
}
