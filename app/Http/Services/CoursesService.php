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
            $courses[] = [
                'name'=>$item['name'],
                'publish'=>$item['publisher_display_name'],
                'description'=>$item['headline'],
                'language'=>$item['language'],
                'image'=>$item['courseImgUrl'],
                'type'=>$type[rand(0,1)],
                'category_id'=> $id
            ];
        }
        return Course::insert($courses);
    }
}
