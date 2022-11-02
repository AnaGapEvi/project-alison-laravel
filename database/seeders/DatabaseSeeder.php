<?php

namespace Database\Seeders;

use App\Models\Career;
use App\Models\Category;

use App\Models\Course;
use App\Models\Skills;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(CareerSeeder::class);
       Category::create([
           "name"=>"IT",
           "image"=>'https://alison.com/html/site/img/header/it-courses.svg',
           "type"=>"Diploma Course"
       ]);
       Category::create([
           "name"=>"Health",
           "image"=>'https://alison.com/html/site/img/header/health-courses.svg',
           "type"=>"Certificate Course"

       ]);
       Category::create([
           "name"=>"Language",
           "image"=>'https://alison.com/html/site/img/header/business-courses.svg',
           "type"=>"Certificate Course"

       ]);
       Category::create([
           "name"=>"Business",
           "image"=>'https://alison.com/html/site/img/header/management-courses.svg',
           "type"=>"Certificate Course"
       ]);
       Category::create([
           "name"=>"Managements",
           "image"=>'https://alison.com/html/site/img/header/management-courses.svg',
           "type"=>"Certificate Course"

       ]);
       Category::create([
           "name"=>"Personal  Development",
           "image"=>'https://alison.com/html/site/img/header/personal-development-courses.svg',
           "type"=>"Diploma Course"

       ]);
       Category::create([
           "name"=>"Sales & Marketing",
           "image"=>'https://alison.com/html/site/img/header/marketing-courses.svg',
           "type"=>"Diploma Course"

       ]);
       Category::create([
           "name"=>"Engineering & Construction",
           "image"=>'https://alison.com/html/site/img/header/engineering-courses.svg',
           "type"=>"Diploma Course"

       ]);
       Category::create([
           "name"=>"Teaching & Academics",
           "image"=>'https://alison.com/html/site/img/header/wpa.svg',
           "type"=>"Diploma Course"

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

//
//        Course::create([
//            'name'=> 'CompTIA A + 1000-Parte 2',
//            'image'=>'https://cdn01.alison-static.net/courses/1962/alison_courseware_intro_1962.jpg',
//            'description'=>'Aprenda las habilidades necesarias para convertirse en un especialista en servicio de PC con este curso gratuito de Comp...
//                               More Information ',
//            'category_id'=> '1',
//            'type'=>'Diploma',
//            'language'=>'English'
//        ]);
//        Course::create([
//            'name'=> 'CompTIA A + 1000-Parte 1',
//            'image' => 'https://cdn01.alison-static.net/courses/1961/alison_courseware_intro_1961.jpg',
//            'description' => 'Aprenda las habilidades necesarias para convertirse en un especialista en servicio de PC con este curso gratuito de Comp...
//                                More Information ',
//            'category_id' => '1',
//            'type'=>'Diploma',
//            'language'=>'English'
//        ]);
//        Course::create([
//            'name'=> 'ISO/IEC 27001-Dinámica del sistema de gestión de la seguridad de la información (ISMS)',
//            'image'=>'https://cdn01.alison-static.net/courses/2251/alison_courseware_intro_2251.jpg',
//            'description'=>'Aprenda las habilidades necesarias para convertirse en un especialista en servicio de PC con este curso gratuito de Comp...
//                            More Information ',
//            'category_id'=>'1',
//            'type'=>'Diploma',
//            'language'=>'English'
//        ]);
//        Course::create([
//            'name'=> 'Diploma en Gestión de Tecnologías de la Información-Revisado 2017',
//            'image'=>'https://cdn01.alison-static.net/courses/1247/alison_courseware_intro_1247.jpg',
//            'description'=>'Aprenda las habilidades necesarias para convertirse en un especialista en servicio de PC con este curso gratuito de Comp...
//                            More Information ',
//            'category_id'=>'1',
//            'type'=>'Certificate',
//            'language'=>'English'
//
//        ]);
//        Course::create([
//            'name'=> 'Introducción a los sistemas de información y gestión',
//            'image'=>'https://cdn01.alison-static.net/courses/3199/alison_courseware_intro_3199.jpg',
//            'description'=>'Aprenda las habilidades necesarias para convertirse en un especialista en servicio de PC con este curso gratuito de Comp...
//                            More Information ',
//            'category_id'=>'1',
//            'type'=>'Certificate',
//            'language'=>'English'
//        ]);
//        Course::create([
//            'name'=> 'Sistemas de información y gestión',
//            'image'=>'https://cdn01.alison-static.net/courses/3274/alison_courseware_intro_3274.jpg',
//            'description'=>'Aprenda las habilidades necesarias para convertirse en un especialista en servicio de PC con este curso gratuito de Comp...
//                            More Information ',
//            'category_id'=>'1',
//            'type'=>'Certificate',
//            'language'=>'English'
//        ]);
//       Course::create([
//            'name' => 'Diploma en Investigación Forense Digital',
//            'image'=>'https://cdn01.alison-static.net/courses/4795/alison_courseware_intro_4795.jpg',
//            'description'=>'Aprenda las habilidades necesarias para convertirse en un especialista en servicio de PC con este curso gratuito de Comp...
//                            More Information ',
//            'category_id'=>'1',
//           'type'=>'Diploma',
//           'language'=>'English'
//        ]);
//        Course::create([
//            'name' => 'Introducción a sistemas de CCTV y diseños de AutoCAD',
//            'image'=>'',
//            'description'=>'En este curso gratuito en línea, conozca los componentes básicos de los sistemas de CCTV y cómo desarrollar planes de si...',
//            'category_id'=>'1',
//            'type'=>'Certificate',
//            'language'=>'English'
//        ]);
//        Course::create([
//            'name' => 'Introducción a QuickBooks Online',
//            'image'=>'',
//            'description'=>'Aprenda a configurar y utilizar Intuit QuickBooks Online para manejar las transacciones comerciales con este curso gratu...',
//            'category_id'=>'1',
//            'type'=>'Certificate',
//            'language'=>'Englist'
//        ]);
//        Course::create([
//            'name' => 'Modelado de diseño y análisis de riesgos en la red de cadena de suministro',
//            'image'=>'',
//            'description'=>'En este curso gratuito de formación online aprenderás sobre Risk Analytics, Design and Modelling of Global Supply Chains...',
//            'category_id'=>'1',
//            'type'=>'Certificate',
//            'language'=>'English'
//        ]);
//        Course::create([
//            'name' => 'ISO 20000-Principios del sistema de gestión de servicios de TI (ITSM)',
//            'image'=>'',
//            'description'=>'En este curso gratuito en línea, conozca los principios, esenciales y operaciones de ISO/IEC 20000-1 estándar de ITSM.',
//            'category_id'=>'1',
//            'type'=>'Certificate',
//            'language'=>'English'
//        ]);
//        Course::create([
//            'name' => 'Diploma en Gestión de Identidad y Acceso',
//            'image'=>'',
//            'description'=>'Las innovaciones tecnológicas, herramientas y procesos organizativos del IAM se explican en este curso de formación grat...',
//            'category_id'=>'1',
//            'type'=>'Diploma',
//            'language'=>'English'
//        ]);
//        Course::create([
//            'name' => 'Diploma en Certificado de Seguridad de Sistemas de Información Profesional (CISSP 2019)',
//            'image'=>'',
//            'description'=>'Obtenga todos los conocimientos necesarios para convertirse en un Auditor de Sistemas de Información.',
//            'category_id'=>'1',
//            'type'=>'Diploma',
//            'language'=>'English'
//        ]);
//        Course::create([
//            'name' => 'CompTIA Cloud + Intermediate',
//            'image'=>'',
//            'description'=> 'Conozca la virtualización de Cloud, la asignación de recursos y la optimización con este curso gratuito de formación en ...',
//            'category_id'=>'1',
//            'type'=>'Certificate',
//            'language'=>'English'
//        ]);
//        Course::create([
//            'name' => 'Resolución de problemas de red, estándares y mejores prácticas',
//            'image'=>'',
//            'description'=>'Explore los procedimientos y los factores de éxito críticos para la resolución de problemas de red con este curso gratui...',
//            'category_id'=>'1',
//            'type'=>'Certificate',
//            'language'=>''
//        ]);
//       Course::create([
//            'name' => '',
//            'image'=>'',
//            'description'=>'',
//            'category_id'=>'',
//            'type'=>'',
//            'language'=>''
//        ]);
//       Course::create([
//            'name' => '',
//            'image'=>'',
//            'description'=>'',
//            'category_id'=>'',
//            'type'=>'',
//            'language'=>''
//        ]);
//       Course::create([
//            'name' => '',
//            'image'=>'',
//            'description'=>'',
//            'category_id'=>'',
//            'type'=>'',
//            'language'=>''
//        ]);
//       Course::create([
//            'name' => '',
//            'image'=>'',
//            'description'=>'',
//            'category_id'=>'',
//            'type'=>'',
//            'language'=>''
//        ]);
//
    }
}
