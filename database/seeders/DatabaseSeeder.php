<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'username' => 'admin',
            'arabic_name'=> 'ادمن',
            'date_of_birth'=> date('Y-m-d', strtotime('2001-01-01')),
            'phone' => '07721111111',
            'country' => 'العراق',
            'date_of_joining' => date('Y-m-d', strtotime('2019-01-01')),
            'type_of_study' => 'دراسة صباحية',
            'branch' => 'معلومات',
            'origin'=> 'الموصل',
            'department' => 'هندسة برمجيات',
            'image'=> 'default.jpg',
            'isAdmin' => true,
            'isManager'=> false,
            'password' => bcrypt('admin'),
        ]);


        DB::table('users')->insert([
            'name' => 'manager',
            'email' => 'manager@gmail.com',
            'username' => 'manager',
            'arabic_name'=> 'مدير',
            'date_of_birth'=> date('Y-m-d', strtotime('2001-01-01')),
            'phone' => '07721111111',
            'country' => 'العراق',
            'date_of_joining' => date('Y-m-d', strtotime('2019-01-01')),
            'type_of_study' => 'دراسة صباحية',
            'branch' => 'معلومات',
            'origin'=> 'الموصل',
            'department' => 'هندسة برمجيات',
            'image'=> 'default.jpg',
            'isAdmin' => false,
            'isManager'=> true,
            'password' => bcrypt('manager'),
        ]);
        
        $user1 = \App\Models\User::create([
            'name' => 'Adam Mohammed Idan',
            'email' => 'adam@gmail.com',
            'username' => 'adam',
            'arabic_name'=> 'ادم محمد عيدان',
            'date_of_birth'=> date('Y-m-d', strtotime('2001-01-01')),
            'phone' => '07721111111',
            'country' => 'Iraqi',
            'arabic_country' => 'عراقي',
            'date_of_joining' => date('Y-m-d', strtotime('2019-01-01')),
            'date_of_graduation' => date('Y-m-d', strtotime('2023-01-01')),
            'type_of_study' => 'صباحية',
            'branch' => 'Information Engineering',
            'arabic_branch' => 'هندسة معلوماتية',
            'origin'=> 'Baghdad',
            'arabic_origin' => 'بغداد',
            'department' => 'Software Engineering',
            'arabic_department' => 'هندسة برمجيات',
            'image'=> 'default.jpg',
            'isAdmin' => false,
            'isManager'=> false,
            'gender' => 'male',
            'password' => bcrypt('password'),
        ]);


        $user2 = \App\Models\User::create([
            'name' => 'Hassan Mohammed Idan',
            'email' => 'hassan@gmail.com',
            'username' => 'hassan',
            'gender' => 'male',
            'arabic_name'=> 'حسن محمد عيدان',
            'date_of_birth'=> date('Y-m-d', strtotime('2000-01-01')),
            'date_of_graduation' => date('Y-m-d', strtotime('2022-01-01')),
            'phone' => '07721111111',
            'country' => 'iraqi',
            'arabic_country' => 'عراقي',
            'date_of_joining' => date('Y-m-d', strtotime('2017-01-01')),
            'type_of_study' => 'صباحية',
            'branch' => 'Network Engineering',
            'arabic_branch' => 'هندسة شبكات',
            'origin'=> 'Baghdad',
            'arabic_origin' => 'بغداد',
            'department' => 'Software Engineering',
            'arabic_department' => 'هندسة برمجيات',
            'image'=> 'default.jpg',
            'isAdmin' => false,
            'isManager'=> false,
            'password' => bcrypt('password'),
        ]);


        $subject1 = \App\Models\Subject::create([
            'name' => 'Introduction to Programming',
            'arabic_name' => 'مقدمة في البرمجة',
        ]);


        $subject2 = \App\Models\Subject::create([
            'name' => 'Microcontroller',
            'arabic_name' => 'ميكروكنترولر',
        ]);

        DB::table('degrees')->insert([
           'user_id' => $user1->id,
            'degree' => 90,
            'stage' => 'First',
            'arabic_stage' => 'اولى',
            'course' => 'اول',
            'subject_id' => $subject1->id,
            'part' => 1,
            'attempt'=> 1
        ]);

        DB::table('degrees')->insert([
            'user_id' => $user1->id,
             'degree' => 60,
             'stage' => 'First',
            'arabic_stage' => 'اولى',
             'course' => 'اول',
             'subject_id' => $subject2->id,
             'part' => 1,
             'attempt'=> 2
         ]);

        DB::table('degrees')->insert([
            'user_id' => $user2->id,
             'degree' => 90,
             'stage' => 'First',
            'arabic_stage' => 'اولى',
             'course' => 'اول',
             'subject_id' => $subject1->id,
             'part' => 2,
             'attempt'=> 2,
         ]);

        
         $user_abdullah = \App\Models\User::create([
            'name' => 'Abdullah Ammar Abdullah',
            'email' => 'Abdullah@gmail.com',
            'username' => 'Abdullah',
            'arabic_name'=> 'عبدالله عمار عبدالله',
            'date_of_birth'=> date('Y-m-d', strtotime('2000-01-01')),
            'phone' => '07721111111',
            'country' => 'Iraqi',
            'arabic_country' => 'عراقي',
            'date_of_joining' => date('Y-m-d', strtotime('2018-01-01')),
            'date_of_graduation' => date('Y-m-d', strtotime('2022-08-15')),
            'type_of_study' => 'صباحية',
            'branch' => 'Information Engineering',
            'arabic_branch' => 'هندسة معلوماتية',
            'origin'=> 'Baghdad',
            'arabic_origin' => 'بغداد',
            'department' => 'Software Engineering',
            'arabic_department' => 'هندسة برمجيات',
            'image'=> 'default.jpg',
            'isAdmin' => false,
            'isManager'=> false,
            'gender' => 'male',
            'password' => bcrypt('password'),
        ]);

        $subject1 = \App\Models\Subject::create([
            'name' => 'Mathematics I',
            'arabic_name' => 'رياضيات اولى',
        ]);

        $subject2 = \App\Models\Subject::create([
            'name' => 'Electrical Circuits Analysis',
            'arabic_name' => 'تحليل دوائر كهربائية',
        ]);

        $subject3 = \App\Models\Subject::create([
            'name' => 'Logic Circuits Design',
            'arabic_name' => 'تصميم دوائر منطقية',
        ]);

        $subject4 = \App\Models\Subject::create([
            'name' => 'Engeering Drawing using computer',
            'arabic_name' => 'رسم هندسي باستخدام الحاسب',
        ]);

        $subject5 = \App\Models\Subject::create([
            'name' => 'Human Rights',
            'arabic_name' => 'حقوق الانسان',
        ]);

        $subject6 = \App\Models\Subject::create([
            'name' => 'Technical Workshop I',
            'arabic_name' => 'ورشة تقنية اولى',
        ]);

        $subject7 = \App\Models\Subject::create([
            'name' => 'English Language I',
            'arabic_name' => 'لغة انكليزية اولى',
        ]);

        $subject8 = \App\Models\Subject::create([
            'name' => 'Algorithm Design and Programming Techniques',
            'arabic_name' => 'تصميم الخوارزميات وتقنيات البرمجة',
        ]);

        $subject9 = \App\Models\Subject::create([
            'name' => 'Labortories I',
            'arabic_name' => 'مختبرات اولى',
        ]);

        $subject10 = \App\Models\Subject::create([
            'name' => 'Mathematics II',
            'arabic_name' => 'رياضيات ثانية',
        ]);

        $subject11 = \App\Models\Subject::create([
            'name' => 'Structured Programming c++',
            'arabic_name' => 'البرمجة المنظمة c++',
        ]);

        $subject12 = \App\Models\Subject::create([
            'name' => 'Democracy',
            'arabic_name' => 'الديمقراطية',
        ]);

        $subject13 = \App\Models\Subject::create([
            'name' => 'Technical Workshop II',
            'arabic_name' => 'ورشة تقنية ثانية',
        ]);

        $subject14 = \App\Models\Subject::create([
            'name' => 'English Language II',
            'arabic_name' => 'لغة انكليزية ثانية',
        ]);

        $subject15 = \App\Models\Subject::create([
            'name' => 'Specific Workshop',
            'arabic_name' => 'ورشة مخصصة',
        ]);

        $subject16 = \App\Models\Subject::create([
            'name' => 'Labortories II',
            'arabic_name' => 'مختبرات ثانية',
        ]);

        $subject17 = \App\Models\Subject::create([
            'name' => 'Electrical Circuits Design',
            'arabic_name' => 'تصميم دوائر كهربائية',
        ]);

        $subject18 = \App\Models\Subject::create([
            'name' => 'Digital Systems Design',
            'arabic_name' => 'تصميم الانظمة الرقمية',
        ]);

        DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
             'degree' => 74,
             'stage' => 'First',
            'arabic_stage' => 'اولى',
             'course' => 'اول',
             'subject_id' => $subject1->id,
             'part' => 2,
             'attempt'=> 1,
         ]);

        
         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'First',
            'arabic_stage' => 'اولى',
            'course' => 'اول',
            'attempt'=> 1,
            'part' => 4,
            'degree' => 57,
            'subject_id' => $subject2->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'First',
            'arabic_stage' => 'اولى',
            'course' => 'اول',
            'attempt'=> 1,
            'part' => 2,
            'degree' => 63,
            'subject_id' => $subject3->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'First',
            'arabic_stage' => 'اولى',
            'course' => 'اول',
            'attempt'=> 1,
            'part' => 2,
            'degree' => 73,
            'subject_id' => $subject4->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'First',
            'arabic_stage' => 'اولى',
            'course' => 'اول',
            'attempt'=> 1,
            'part' => 2,
            'degree' => 53,
            'subject_id' => $subject5->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'First',
            'arabic_stage' => 'اولى',
            'course' => 'اول',
            'attempt'=> 1,
            'part' => 2,
            'degree' => 80,
            'subject_id' => $subject6->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'First',
            'arabic_stage' => 'اولى',
            'course' => 'اول',
            'attempt'=> 1,
            'part' => 2,
            'degree' => 59,
            'subject_id' => $subject7->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'First',
            'arabic_stage' => 'اولى',
            'course' => 'اول',
            'attempt'=> 1,
            'part' => 2,
            'degree' => 50,
            'subject_id' => $subject8->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'First',
            'arabic_stage' => 'اولى',
            'course' => 'اول',
            'attempt'=> 1,
            'part' => 4,
            'degree' => 77,
            'subject_id' => $subject9->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'First',
            'arabic_stage' => 'اولى',
            'course' => 'ثاني',
            'attempt'=> 1,
            'part' => 2,
            'degree' => 91,
            'subject_id' => $subject10->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'First',
            'arabic_stage' => 'اولى',
            'course' => 'ثاني',
            'attempt'=> 2,
            'part' => 4,
            'degree' => 51,
            'subject_id' => $subject17->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'First',
            'arabic_stage' => 'اولى',
            'course' => 'ثاني',
            'attempt'=> 1,
            'part' => 2,
            'degree' => 50,
            'subject_id' => $subject11->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'First',
            'arabic_stage' => 'اولى',
            'course' => 'ثاني',
            'attempt'=> 1,
            'part' => 2,
            'degree' => 50,
            'subject_id' => $subject12->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'First',
            'arabic_stage' => 'اولى',
            'course' => 'ثاني',
            'attempt'=> 1,
            'part' => 2,
            'degree' => 50,
            'subject_id' => $subject13->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'First',
            'arabic_stage' => 'اولى',
            'course' => 'ثاني',
            'attempt'=> 1,
            'part' => 2,
            'degree' => 78,
            'subject_id' => $subject14->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'First',
            'arabic_stage' => 'اولى',
            'course' => 'ثاني',
            'attempt'=> 1,
            'part' => 2,
            'degree' => 55,
            'subject_id' => $subject15->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'First',
            'arabic_stage' => 'اولى',
            'course' => 'ثاني',
            'attempt'=> 1,
            'part' => 2,
            'degree' => 75,
            'subject_id' => $subject16->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'First',
            'arabic_stage' => 'اولى',
            'course' => 'ثاني',
            'attempt'=> 1,
            'part' => 4,
            'degree' => 58,
            'subject_id' => $subject16->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'First',
            'arabic_stage' => 'اولى',
            'course' => 'ثاني',
            'attempt'=> 1,
            'part' => 2,
            'degree' => 50,
            'subject_id' => $subject18->id,
         ]);


         // second year
         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
             'degree' => 74,
             'stage' => 'Second',
            'arabic_stage' => 'ثانية',
             'course' => 'اول',
             'subject_id' => $subject1->id,
             'part' => 2,
             'attempt'=> 1,
         ]);

        
         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'Second',
            'arabic_stage' => 'ثانية',
            'course' => 'اول',
            'attempt'=> 1,
            'part' => 4,
            'degree' => 57,
            'subject_id' => $subject2->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'Second',
            'arabic_stage' => 'ثانية',
            'course' => 'اول',
            'attempt'=> 1,
            'part' => 2,
            'degree' => 63,
            'subject_id' => $subject3->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'Second',
            'arabic_stage' => 'ثانية',
            'course' => 'اول',
            'attempt'=> 1,
            'part' => 2,
            'degree' => 73,
            'subject_id' => $subject4->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'Second',
            'arabic_stage' => 'ثانية',
            'course' => 'اول',
            'attempt'=> 1,
            'part' => 2,
            'degree' => 53,
            'subject_id' => $subject5->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'Second',
            'arabic_stage' => 'ثانية',
            'course' => 'اول',
            'attempt'=> 1,
            'part' => 2,
            'degree' => 80,
            'subject_id' => $subject6->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'Second',
            'arabic_stage' => 'ثانية',
            'course' => 'اول',
            'attempt'=> 1,
            'part' => 2,
            'degree' => 59,
            'subject_id' => $subject7->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'Second',
            'arabic_stage' => 'ثانية',
            'course' => 'اول',
            'attempt'=> 1,
            'part' => 2,
            'degree' => 50,
            'subject_id' => $subject8->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'Second',
            'arabic_stage' => 'ثانية',
            'course' => 'اول',
            'attempt'=> 1,
            'part' => 4,
            'degree' => 77,
            'subject_id' => $subject9->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'Second',
            'arabic_stage' => 'ثانية',
            'course' => 'ثاني',
            'attempt'=> 1,
            'part' => 2,
            'degree' => 91,
            'subject_id' => $subject10->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'Second',
            'arabic_stage' => 'ثانية',
            'course' => 'ثاني',
            'attempt'=> 2,
            'part' => 4,
            'degree' => 51,
            'subject_id' => $subject17->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'Second',
            'arabic_stage' => 'ثانية',
            'course' => 'ثاني',
            'attempt'=> 1,
            'part' => 2,
            'degree' => 50,
            'subject_id' => $subject11->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'Second',
            'arabic_stage' => 'ثانية',
            'course' => 'ثاني',
            'attempt'=> 1,
            'part' => 2,
            'degree' => 50,
            'subject_id' => $subject12->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'Second',
            'arabic_stage' => 'ثانية',
            'course' => 'ثاني',
            'attempt'=> 1,
            'part' => 2,
            'degree' => 50,
            'subject_id' => $subject13->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'Second',
            'arabic_stage' => 'ثانية',
            'course' => 'ثاني',
            'attempt'=> 1,
            'part' => 2,
            'degree' => 78,
            'subject_id' => $subject14->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'Second',
            'arabic_stage' => 'ثانية',
            'course' => 'ثاني',
            'attempt'=> 1,
            'part' => 2,
            'degree' => 55,
            'subject_id' => $subject15->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'Second',
            'arabic_stage' => 'ثانية',
            'course' => 'ثاني',
            'attempt'=> 1,
            'part' => 2,
            'degree' => 75,
            'subject_id' => $subject16->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'Second',
            'arabic_stage' => 'ثانية',
            'course' => 'ثاني',
            'attempt'=> 1,
            'part' => 4,
            'degree' => 58,
            'subject_id' => $subject16->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'Second',
            'arabic_stage' => 'ثانية',
            'course' => 'ثاني',
            'attempt'=> 1,
            'part' => 2,
            'degree' => 50,
            'subject_id' => $subject18->id,
         ]);

         // third year

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
             'degree' => 74,
             'stage' => 'Third',
            'arabic_stage' => 'ثالثة',
             'course' => 'اول',
             'subject_id' => $subject1->id,
             'part' => 2,
             'attempt'=> 1,
         ]);

        
         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'Third',
            'arabic_stage' => 'ثالثة',
            'course' => 'اول',
            'attempt'=> 1,
            'part' => 4,
            'degree' => 57,
            'subject_id' => $subject2->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'Third',
            'arabic_stage' => 'ثالثة',
            'course' => 'اول',
            'attempt'=> 1,
            'part' => 2,
            'degree' => 63,
            'subject_id' => $subject3->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'Third',
            'arabic_stage' => 'ثالثة',
            'course' => 'اول',
            'attempt'=> 1,
            'part' => 2,
            'degree' => 73,
            'subject_id' => $subject4->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'Third',
            'arabic_stage' => 'ثالثة',
            'course' => 'اول',
            'attempt'=> 1,
            'part' => 2,
            'degree' => 53,
            'subject_id' => $subject5->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'Third',
            'arabic_stage' => 'ثالثة',
            'course' => 'اول',
            'attempt'=> 1,
            'part' => 2,
            'degree' => 80,
            'subject_id' => $subject6->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'Third',
            'arabic_stage' => 'ثالثة',
            'course' => 'اول',
            'attempt'=> 1,
            'part' => 2,
            'degree' => 59,
            'subject_id' => $subject7->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'Third',
            'arabic_stage' => 'ثالثة',
            'course' => 'اول',
            'attempt'=> 1,
            'part' => 2,
            'degree' => 50,
            'subject_id' => $subject8->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'Third',
            'arabic_stage' => 'ثالثة',
            'course' => 'اول',
            'attempt'=> 1,
            'part' => 4,
            'degree' => 77,
            'subject_id' => $subject9->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'Third',
            'arabic_stage' => 'ثالثة',
            'course' => 'ثاني',
            'attempt'=> 1,
            'part' => 2,
            'degree' => 91,
            'subject_id' => $subject10->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'Third',
            'arabic_stage' => 'ثالثة',
            'course' => 'ثاني',
            'attempt'=> 2,
            'part' => 4,
            'degree' => 51,
            'subject_id' => $subject17->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'Third',
            'arabic_stage' => 'ثالثة',
            'course' => 'ثاني',
            'attempt'=> 1,
            'part' => 2,
            'degree' => 50,
            'subject_id' => $subject11->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'Third',
            'arabic_stage' => 'ثالثة',
            'course' => 'ثاني',
            'attempt'=> 1,
            'part' => 2,
            'degree' => 50,
            'subject_id' => $subject12->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'Third',
            'arabic_stage' => 'ثالثة',
            'course' => 'ثاني',
            'attempt'=> 1,
            'part' => 2,
            'degree' => 50,
            'subject_id' => $subject13->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'Third',
            'arabic_stage' => 'ثالثة',
            'course' => 'ثاني',
            'attempt'=> 1,
            'part' => 2,
            'degree' => 78,
            'subject_id' => $subject14->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'Third',
            'arabic_stage' => 'ثالثة',
            'course' => 'ثاني',
            'attempt'=> 1,
            'part' => 2,
            'degree' => 55,
            'subject_id' => $subject15->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'Third',
            'arabic_stage' => 'ثالثة',
            'course' => 'ثاني',
            'attempt'=> 1,
            'part' => 2,
            'degree' => 75,
            'subject_id' => $subject16->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'Third',
            'arabic_stage' => 'ثالثة',
            'course' => 'ثاني',
            'attempt'=> 1,
            'part' => 4,
            'degree' => 58,
            'subject_id' => $subject16->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'Third',
            'arabic_stage' => 'ثالثة',
            'course' => 'ثاني',
            'attempt'=> 1,
            'part' => 2,
            'degree' => 50,
            'subject_id' => $subject18->id,
         ]);

         // forth stage

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
             'degree' => 74,
             'stage' => 'Forth',
            'arabic_stage' => 'رابعة',
             'course' => 'اول',
             'subject_id' => $subject1->id,
             'part' => 2,
             'attempt'=> 1,
         ]);

        
         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'Forth',
            'arabic_stage' => 'رابعة',
            'course' => 'اول',
            'attempt'=> 1,
            'part' => 4,
            'degree' => 57,
            'subject_id' => $subject2->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'Forth',
            'arabic_stage' => 'رابعة',
            'course' => 'اول',
            'attempt'=> 1,
            'part' => 2,
            'degree' => 63,
            'subject_id' => $subject3->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'Forth',
            'arabic_stage' => 'رابعة',
            'course' => 'اول',
            'attempt'=> 1,
            'part' => 2,
            'degree' => 73,
            'subject_id' => $subject4->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'Forth',
            'arabic_stage' => 'رابعة',
            'course' => 'اول',
            'attempt'=> 1,
            'part' => 2,
            'degree' => 53,
            'subject_id' => $subject5->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'Forth',
            'arabic_stage' => 'رابعة',
            'course' => 'اول',
            'attempt'=> 1,
            'part' => 2,
            'degree' => 80,
            'subject_id' => $subject6->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'Forth',
            'arabic_stage' => 'رابعة',
            'course' => 'اول',
            'attempt'=> 1,
            'part' => 2,
            'degree' => 59,
            'subject_id' => $subject7->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'Forth',
            'arabic_stage' => 'رابعة',
            'course' => 'اول',
            'attempt'=> 1,
            'part' => 2,
            'degree' => 50,
            'subject_id' => $subject8->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'Forth',
            'arabic_stage' => 'رابعة',
            'course' => 'اول',
            'attempt'=> 1,
            'part' => 4,
            'degree' => 77,
            'subject_id' => $subject9->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'Forth',
            'arabic_stage' => 'رابعة',
            'course' => 'ثاني',
            'attempt'=> 1,
            'part' => 2,
            'degree' => 91,
            'subject_id' => $subject10->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'Forth',
            'arabic_stage' => 'رابعة',
            'course' => 'ثاني',
            'attempt'=> 2,
            'part' => 4,
            'degree' => 51,
            'subject_id' => $subject17->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'Forth',
            'arabic_stage' => 'رابعة',
            'course' => 'ثاني',
            'attempt'=> 1,
            'part' => 2,
            'degree' => 50,
            'subject_id' => $subject11->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'Forth',
            'arabic_stage' => 'رابعة',
            'course' => 'ثاني',
            'attempt'=> 1,
            'part' => 2,
            'degree' => 50,
            'subject_id' => $subject12->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'Forth',
            'arabic_stage' => 'رابعة',
            'course' => 'ثاني',
            'attempt'=> 1,
            'part' => 2,
            'degree' => 50,
            'subject_id' => $subject13->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'Forth',
            'arabic_stage' => 'رابعة',
            'course' => 'ثاني',
            'attempt'=> 1,
            'part' => 2,
            'degree' => 78,
            'subject_id' => $subject14->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'Forth',
            'arabic_stage' => 'رابعة',
            'course' => 'ثاني',
            'attempt'=> 1,
            'part' => 2,
            'degree' => 55,
            'subject_id' => $subject15->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'Forth',
            'arabic_stage' => 'رابعة',
            'course' => 'ثاني',
            'attempt'=> 1,
            'part' => 2,
            'degree' => 75,
            'subject_id' => $subject16->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'Forth',
            'arabic_stage' => 'رابعة',
            'course' => 'ثاني',
            'attempt'=> 1,
            'part' => 4,
            'degree' => 58,
            'subject_id' => $subject16->id,
         ]);

         DB::table('degrees')->insert([
            'user_id' => $user_abdullah->id,
            'stage' => 'Forth',
            'arabic_stage' => 'رابعة',
            'course' => 'ثاني',
            'attempt'=> 1,
            'part' => 2,
            'degree' => 50,
            'subject_id' => $subject18->id,
         ]);
    }
}
