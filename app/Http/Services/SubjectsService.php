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
            $subjects[] = [
                'name'=>$item['name'],
                'slug'=>$item['slug'],
                'category_id'=> $id
            ];
        }

        return Subject::insert($subjects);
    }
}
