<?php

namespace Database\Seeders;

use App\Models\Category;

use App\Models\Skills;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(CareerSeeder::class);
       Category::create([
           "name"=>"IT",
           "image"=>'https://alison.com/html/site/img/header/it-courses.svg',
           "url" => 'https://alison.com/courses/it',
           "type"=>"Diploma Course"
       ]);

       Category::create([
           "name"=>"Health",
           "image"=>'https://alison.com/html/site/img/header/health-courses.svg',
           "type"=>"Certificate Course",
            "url"=>"https://alison.com/courses/health"
       ]);
       Category::create([
           "name"=>"Language",
           "image"=>'https://alison.com/html/site/img/header/business-courses.svg',
           "type"=>"Certificate Course",
            "url"=>"https://alison.com/courses/language"
       ]);
       Category::create([
           "name"=>"Business",
           "image"=>'https://alison.com/html/site/img/header/management-courses.svg',
           "type"=>"Certificate Course",
           "url"=>"https://alison.com/courses/business"
       ]);
       Category::create([
           "name"=>"Managements",
           "image"=>'https://alison.com/html/site/img/header/management-courses.svg',
           "type"=>"Certificate Course",
            "url"=>"https://alison.com/courses/management",
       ]);
       Category::create([
           "name"=>"Personal  Development",
           "image"=>'https://alison.com/html/site/img/header/personal-development-courses.svg',
           "type"=>"Diploma Course",
           "url"=>"https://alison.com/courses/personal-development",
       ]);
       Category::create([
           "name"=>"Sales & Marketing",
           "image"=>'https://alison.com/html/site/img/header/marketing-courses.svg',
           "type"=>"Diploma Course",
           "url"=>"https://alison.com/courses/marketing",
       ]);
       Category::create([
           "name"=>"Engineering & Construction",
           "image"=>'https://alison.com/html/site/img/header/engineering-courses.svg',
           "type"=>"Diploma Course",
           "url"=>"https://alison.com/courses/engineering",
       ]);
       Category::create([
           "name"=>"Teaching & Academics",
           "image"=>'https://alison.com/html/site/img/header/wpa.svg',
           "type"=>"Diploma Course",
            "url"=>"https://alison.com/courses/education",
       ]);

        Skills::create([
            "name" => 'Information Systems'
        ]);
        Skills::create([
            "name" => 'Business Management'
        ]);
        Skills::create([
            "name" => 'Management'
        ]);
        Skills::create([
            "name" => 'Heaithcare'
        ]);
        Skills::create([
            "name" => 'Human Resources'
        ]);
        Skills::create([
            "name" => 'Quality Control'
        ]);
        Skills::create([
            "name" => 'Contract Law'
        ]);
        Skills::create([
            "name" => 'Caregiving'
        ]);
        Skills::create([
            "name" => 'Caregiving'
        ]);
        Skills::create([
            "name" => 'Electrical Engineering'
        ]);
        Skills::create([
            "name" => 'Law'
        ]);
        Skills::create([
            "name" => 'Health Safety'
        ]);
        Skills::create([
            "name" => 'Nursing'
        ]);
        Skills::create([
            "name" => 'English Language'
        ]);
        Skills::create([
            "name" => 'Psychology'
        ]);
        Skills::create([
            "name" => 'French Language'
        ]);
        Skills::create([
            "name" => 'Carpentry'
        ]);
        Skills::create([
            "name" => 'German Language'
        ]);
        Skills::create([
            "name" => 'Quality Management'
        ]);
        Skills::create([
            "name" => 'Journalism'
        ]);
        Skills::create([
            "name" => 'Mental Health'
        ]);
        Skills::create([
            "name" => 'Nutrition'
        ]);
        Skills::create([
            "name" => 'Programming'
        ]);
        Skills::create([
            "name" => 'Fitness'
        ]);
        Skills::create([
            "name" => 'Sales'
        ]);
        Skills::create([
            "name" => 'Communication Skills'
        ]);
        Skills::create([
            "name" => 'Hospitality'
        ]);
        Skills::create([
            "name" => 'Construction'
        ]);
        Skills::create([
            "name" => 'Music'
        ]);
        Skills::create([
            "name" => 'E-commerce'
        ]);
        Skills::create([
            "name" => 'Engineering'
        ]);
        Skills::create([
            "name" => 'Data Science'
        ]);
        Skills::create([
            "name" => 'Pharmacology'
        ]);
        Skills::create([
            "name" => 'Ccna'
        ]);
        Skills::create([
            "name" => 'Customer Service'
        ]);
        Skills::create([
            "name" => 'Accounting'
        ]);
        Skills::create([
            "name" => 'Architecture'
        ]);
        Skills::create([
            "name" => 'Databases'
        ]);
        Skills::create([
            "name" => 'Physiotherapy'
        ]);
        Skills::create([
            "name" => 'Mathematics'
        ]);

    }
}
