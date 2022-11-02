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
                $image =$item['courseImgUrl'];
                $description = $item['headline'];
                $language = $item['language'];
                $name = $item['name'];
                $headline = $item['headline'];
                $publisherName = $item['publisher_name'];

                $certificates[] = [
                    'image'=>$image,
                    'headline'=>$headline,
                    'description'=>$description,
                    'language'=>$language,
                    'name'=>$name,
                    'publish_name'=>$publisherName,
                    'type'=>$type
                ];
            }

            return Certificate::insert($certificates);
        }
}
