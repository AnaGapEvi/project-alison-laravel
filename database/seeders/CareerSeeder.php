<?php

namespace Database\Seeders;

use App\Models\Career;
use Illuminate\Database\Seeder;

class CareerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Career::create([
            'name' => 'agriculture-food-and-natural-resources',
            'title'=>'Agriculture, Food, And Natural Resources',
            'description'=> 'The agriculture, food and natural resources industries have a huge
                            impact on our daily lives. Without them, what would we eat or how would we know
                            whether our drinking water is safe? These fields involve the production, processing,
                            marketing, financing, distribution and development of agricultural commodities and
                            resources, including food, fibres,wood products, natural resources, horticulture and other plant and animal products.',
            'technology' => 'Is Agriculture, Food, and Natural Resources a good career pat',
            'image'=>'https://cdn01.alison-static.net/careers/industry/entity/agriculture-food-and-natural-resources--new.jpg'

        ]);

        Career::create([
            'name'=>'architecture',
            'title'=>'Architecture and Construction Careers',
            'description'=> 'Do you ever look at a building or
                            house and think about how you could have designed it better?
                            As a child, did you continue playing with blocks long after others had moved on?
                            If your answer is, then a career in architecture and construction may be for you.
                            This exciting industry can take you all over the world and will always keep you in demand because as
                            long as people need houses and buildings, they will need architects and builders.',
            'technology' =>'Is Architecture and Construction a good career path',
            'image'=>'https://cdn01.alison-static.net/careers/industry/entity/architecture-and-construction--new.jpg'

        ]);

        Career::create([
            'name'=>'arts',
            'title'=>'Arts, Audio/Video Technology, and Communications Careers',
            'description'=> 'The arts, A/V technology and communications are all fields that truly
                            challenge and nurture your creative talents. They are industries that create many different
                            types of jobs in the areas of designing, performing, broadcasting or writing. Natural talent,
                            however, may not always be enough to secure a career: having certified qualifications and a
                            wide-ranging portfolio - whether in photography, copywriting, editing or acting
                            - will put you on the path to success',
            'technology' =>'Is Arts, Audio/Video Technology, and Communications a good career path',
            'image'=> 'https://cdn01.alison-static.net/careers/industry/entity/arts-audio-video-technology-and-communications--new.jpg',
        ]);
        Career::create([
            'name'=>'distribution',
            'title'=>'Transportation, Distribution, and Logistics Careers',
            'description'=> 'Transportation, distribution and logistics is a huge industry that covers a
                            variety of careers to suit the interests of skilled and qualified people.
                            With the ever-increasing growth of online marketplaces comes many opportunities for
                            employment in this thriving industry. Employees need core skills in time management,
                            planning and troubleshooting. With jobs in technical support,
                            stock and warehouse management, and physical labour, this field is always in demand.',
            'technology' =>'Is Transportation, Distribution, and Logistics a good career path',
            'image'=>'https://cdn01.alison-static.net/careers/industry/entity/transportation-distribution-and-logistics--new.jpg'
        ]);
        Career::create([
            'name'=>'education',
            'title'=>'Education and Training Careers',
            'description'=>"Research shows that many countries around the world will likely not
                            have enough teachers to provide quality education to all their children by 2030.
                            People with skills in the education and training industries are always in-demand globally.
                            Growing world-wide enrolment in universities, technical colleges and e-learning courses also
                            means a steady supply of teachers,
                            trainers, subject-matter experts, tutors and assessors is required.",
            'technology' =>'Is Education and Training a good career path',
            'image'=>'https://cdn01.alison-static.net/careers/industry/entity/education-and-training--new.jpg'
        ]);

        Career::create([
            'name'=>'finance',
            'title'=>'Finance Careers',
            'description'=>"As much as 'love makes the world go round', money is an essential element
                            in each of our lives. We entrust our financial well-being to people who safeguard bank accounts,
                            provide loans, insure assets and homes, and help us make wise investments. Careers in the financial
                            services industry involve using your skills in maths and statistics to make strategic decisions
                            to obtain,save, protect and grow the financial assets of both businesses and people.",
            'technology' =>'Is Finance a good career path',
            'image'=>'https://cdn01.alison-static.net/careers/industry/entity/finance--new.jpg'
        ]);
        Career::create([
            'name'=>'government',
            'title'=>'Government and Public Administration Careers',
            'description'=>"Do you love getting involved in projects and policies focused on improving your community?
                            If so, a career in government and public administration might be for you.
                            Here are some of the career paths that would be open to you with the correct qualifications
                            and a sound understanding of governmental operations: public representation, national security,
                            planning, revenue and taxation, regulation, and public administration.",
            'technology' =>'Is Government and Public Administration a good career path',
            'image'=>'https://cdn01.alison-static.net/careers/industry/entity/government-and-public-administration--new.jpg'
        ]);
        Career::create([
            'name'=>'health',
            'title'=>'Health Science Careers',
            'description'=>"Health science is the industry of the healing hand. Do you feel rewarded by helping people feel better?
                            The field of health science guides students to careers that promote health and wellness,
                            as well as diagnose and treat injuries and diseases. Depending on the path you follow, you have a
                            world of locations open to you, such as community hospitals, medical or dental offices or laboratories,
                            cruise ships, medevac units, sports arenas or even space centres!",
            'technology' =>'Is Health Science a good career path',
            'image'=>'https://cdn01.alison-static.net/careers/industry/entity/health-science--new.jpg'
        ]);
        Career::create([
            'name'=>'hospitality',
            'title'=>'Hospitality and Tourism Careers',
            'description'=>"Supporting about 300 million jobs globally, the hospitality and tourism industry is one of the
                            biggest in the world. It is the economic lifeblood of many countries and regions around the globe and,
                            with emerging markets yet to reach their full potential, this exciting industry is only expected to
                            grow. It is important to be grounded in as many travel-related
                            elements as possible including English, hotel operations, food service and travel management.",
            'technology' =>'Is Hospitality and Tourism a good career path',
            'image'=>'https://cdn01.alison-static.net/careers/industry/entity/hospitality-and-tourism--new.jpg'
        ]);

        Career::create([
            'name'=>'human services',
            'title'=>'Human Services Careers',
            'description'=>"The objective of the human services industry is to improve overall quality of life.
                            Careers in this field focus on prevention as well as treating problems, such as mental health services,
                            psychological assistance, and health education. The demand for employees is high as there is always a need for empathetic people who can provide quality care and who have core skills
                            such the ability to work to find solutions for and work with a wide range of patients and clients.",
            'technology' =>'Is Human Services a good career path',
            'image'=>'https://cdn01.alison-static.net/careers/industry/entity/human-services--new.jpg'
        ]);

        Career::create([
            'name'=>'it',
            'title'=>'Information Technology Careers',
            'description'=>"The IT industry is a dynamic and entrepreneurial working environment that has had a revolutionary
                            impact on the global economy and society over the past few decades. If you love technology and enjoy
                            working with computer hardware, software, multimedia or network systems, then a career in information
                            technology could be for you. Graphics, multimedia animation, web design,
                            game and application development, networking and computer repair are all possibilities.",
            'technology' =>'Is Information Technology a good career path',
            'image'=>'https://cdn01.alison-static.net/careers/industry/entity/information-technology--new.jpg'
        ]);

        Career::create([
            'name'=>'management',
            'title'=>'Business Management and Administration Careers',
            'description'=>"From major corporations to independent businesses, every operation needs skilled business managers
                            and administrators to succeed. Knowing how to deal with stress, remain calm and keep the business
                            running smoothly are crucial to any corporation's success, no matter how small or large, local or
                            global, it is. Advance your business knowledge and managerial skills by studying organisational
                            leadership, human resources and strategic planning courses.",
            'technology' =>'Is Business Management and Administration a good career path',
            'image'=>'https://cdn01.alison-static.net/careers/industry/entity/business-management-and-administration--new.jpg'
        ]);

        Career::create([
            'name'=>'manufacturing',
            'title'=>'Manufacturing Careers',
            'description'=>"Manufacturing is the process of making a product on a large scale using machinery.
                            It is an extensive industry, which ranges from wide-open factory floors to small
                            home-based businesses that produce a variety of items, from food to machines.
                            Manufacturing has developed significantly over the years, as more and more businesses aim
                            to use ever-evolving technologies that can produce durable products in a shorter production
                            time at higher profit.",
            'technology' =>'Is Manufacturing a good career path',
            'image'=> 'https://cdn01.alison-static.net/careers/industry/entity/manufacturing--new.jpg'
        ]);

        Career::create([
            'name'=>'marketing',
            'title'=>'Marketing, Sales, and Service Careers',
            'description'=>"Marketing is an industry that has evolved and grown tremendously over the past few decades.
                            It is a crucial area for businesses, large or small. A business may have the most revolutionary
                            product or service at their fingertips but if it is not marketed optimally, how will consumers
                            know about it? Marketing also provides companies with an opportunity to understand what kind of
                            goods and services their current and futurecustomers are looking for.",
            'technology' =>'Is Marketing, Sales, and Service a good career path',
            'image'=> 'https://cdn01.alison-static.net/careers/industry/entity/marketing--new.jpg'
        ]);

        Career::create([
            'name'=>'security',
            'title'=>'Law, Public Safety, Corrections, and Security Careers',
            'description'=>"Careers in law, public safety, correctional services and security cover a wide scope
                            and people interested in these fields need to possess a variety of skills. Opportunities
                            for growth are positive as administrations must service citizens' needs. There are a number
                            of career paths, such as legal services; law enforcement; security,
                            correctional and protective services; and emergency, disaster and fire management services.",
            'technology' =>'Is Law, Public Safety, Corrections, and Security a good career path',
            'image'=>'https://cdn01.alison-static.net/careers/industry/entity/law-public-safety-corrections-and-security--new.jpg'
        ]);

        Career::create([
            'name'=>'stem',
            'title'=>'Science, Technology, Engineering, and Mathematics Careers',
            'description'=>" A career in science, technology, engineering and mathematics (STEM) is exciting,
                            challenging, ever-changing and highly in-demand globally. Currently, at least 75
                            percent of jobs in the fastest-growing industries require workers with STEM skills,
                            and with worldwide STEM-skills shortages, this need is only expected to increase.
                            Occupations involve planning, managing and providing scientific research as well as
                            providing professional and technical services.",
            'technology' =>'Is Science, Technology, Engineering, and Mathematics a good career path',
            'image'=>'https://cdn01.alison-static.net/careers/industry/entity/science-technology-engineering-and-mathematics--new.jpg'
        ]);
    }
}
