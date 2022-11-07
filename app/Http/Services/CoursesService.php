<?php

namespace App\Http\Services;

use App\Models\Course;
use Illuminate\Support\Facades\Http;

class CoursesService
{
    public function createCourse(string $url, int $id): bool
    {
        $urls = Http::get($url);
        $listItem = $urls['result'];

        $courses = [];
        $type=['Certificate', 'Diploma'];

        foreach ($listItem as $item){
            $image =$item['courseImgUrl'];
            $description = $item['headline'];
            $language = $item['language'];
            $name = $item['name'];
            $publisherDisplayName = $item['publisher_display_name'];

            $courses[] = [
                'name'=>$name,
                'publish'=>$publisherDisplayName,
                'description'=>$description,
                'language'=>$language,
                'image'=>$image,
//                'type'=>'sss',
                'type'=>$type[rand(0,1)],
                'category_id'=> $id
            ];
        }
//        dd($courses);

        return Course::insert($courses);
    }
}
