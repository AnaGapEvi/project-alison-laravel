<?php

namespace App\Http\Services;

use App\Models\Subject;
use Illuminate\Support\Facades\Http;

class SubjectsService
{
    public function createSubject(string $url, int $id): bool
    {
        $urlIt = Http::get($url);
        $listItemIt = $urlIt['result'];
        $subjects = [];

        foreach ($listItemIt as $item){
            $name = $item['name'];
            $slug = $item['slug'];

            $subjects[] = [
                'name'=>$name,
                'slug'=>$slug,
                'category_id'=> $id
            ];
        }

        return Subject::insert($subjects);
    }
}
