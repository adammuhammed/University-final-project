<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CertificatesInterfaceController extends Controller
{
    public function main() {
        return view('certificates_interface.main');
    }

    public function cert_en() {
        return view('certificates_interface.cert_en');
    }

    public function cert_ar() {
        return view('certificates_interface.cert_ar');
    }

    public function endor_ar() {
        return view('certificates_interface.endor_ar');
    }

    public function higher_ar() {
        return view('certificates_interface.higher_ar');
    }

    public function paper_ar() {
        return view('certificates_interface.paper_ar');
    }

    public function paper_en() {
        return view('certificates_interface.paper_en');
    }

    public function cert_show() {
        $query = request()->query('q');
        $data = request()->validate([
            'name' => 'required',
            'date' => 'required',
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'hod' => 'required',
            'ur' => 'required',
            'pou' => 'required',
        ]);


        // get user by name or raise error user not found
        if($query=='cert_en' || $query=='paper_en') {
            $user = \App\Models\User::where('name', $data['name'])->firstOrFail();
        } elseif($query=='cert_ar' || $query=='endor_ar' || $query=='higher_ar' || $query=='paper_ar') {
            $user = \App\Models\User::where('arabic_name', $data['name'])->firstOrFail();
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
        
        // get all students that graduate in same year and same branch and add column named avg_degree that calculate avg in model named degree
        $students = \App\Models\User::where('date_of_graduation', $user->date_of_graduation)->where('branch', $user->branch)->with('degrees')->get();
        $students->map(function($student){
            $student->avg_degree = $student->degrees->avg('degree');
            $student->avg_degree = number_format((float)$student->avg_degree, 3, '.', '');
            return $student;
        });
        // order by avg_Degree
        $students = $students->sortByDesc('avg_degree');
        // get user rank
        $rank = $students->search(function($student) use ($user){
            return $student->id == $user->id;
        }) + 1;
        // get first user avg_Degree    
        $first_user_avg = $students->first()->avg_degree;

        // get total students graduate in same year
        $total_students = \App\Models\User::where('date_of_graduation', $user->date_of_graduation)->where('branch', $user->branch)->count();

        // get user first year course one degrees
        $year_one_course_one_degrees = \App\Models\Degree::with('subject')->where('user_id', $user->id)->where('course', 'اول')->where('stage', 'First')->get();
        // get avg
        $year_one_course_one_degrees_avg = $year_one_course_one_degrees->avg('degree');
        // get user first year course two degrees
        $year_one_course_two_degrees = \App\Models\Degree::with('subject')->where('user_id', $user->id)->where('course', 'ثاني')->where('stage', 'First')->get();
        // get avg
        $year_one_course_two_degrees_avg = $year_one_course_two_degrees->avg('degree');
        // get user second year course one degrees
        $year_two_course_one_degrees = \App\Models\Degree::with('subject')->where('user_id', $user->id)->where('course', 'اول')->where('stage', 'Second')->get();
        // get avg
        $year_two_course_one_degrees_avg = $year_two_course_one_degrees->avg('degree');
        // get user second year course two degrees
        $year_two_course_two_degrees = \App\Models\Degree::with('subject')->where('user_id', $user->id)->where('course', 'ثاني')->where('stage', 'Second')->get();
        // get avg
        $year_two_course_two_degrees_avg = $year_two_course_two_degrees->avg('degree');
        // get user third year course one degrees
        $year_three_course_one_degrees = \App\Models\Degree::with('subject')->where('user_id', $user->id)->where('course', 'اول')->where('stage', 'Third')->get();
        // get avg
        $year_three_course_one_degrees_avg = $year_three_course_one_degrees->avg('degree');
        // get user third year course two degrees
        $year_three_course_two_degrees = \App\Models\Degree::with('subject')->where('user_id', $user->id)->where('course', 'ثاني')->where('stage', 'Third')->get();
        // get avg
        $year_three_course_two_degrees_avg = $year_three_course_two_degrees->avg('degree');
        // get user fourth year course one degrees
        $year_four_course_one_degrees = \App\Models\Degree::with('subject')->where('user_id', $user->id)->where('course', 'اول')->where('stage', 'Forth')->get();
        // get avg
        $year_four_course_one_degrees_avg = $year_four_course_one_degrees->avg('degree');
        // get user fourth year course two degrees
        $year_four_course_two_degrees = \App\Models\Degree::with('subject')->where('user_id', $user->id)->where('course', 'ثاني')->where('stage', 'Forth')->get();
        // get avg
        $year_four_course_two_degrees_avg = $year_four_course_two_degrees->avg('degree');
        $data['picture'] = request('picture')->store('images', 'public');

        $total_avg = ($year_one_course_one_degrees_avg + $year_one_course_two_degrees_avg + $year_two_course_one_degrees_avg + $year_two_course_two_degrees_avg + $year_three_course_one_degrees_avg + $year_three_course_two_degrees_avg + $year_four_course_one_degrees_avg + $year_four_course_two_degrees_avg) / 8;
        $total_avg = number_format((float)$total_avg, 3, '.', '');

        // if there is degree in year one course one or course two on with value of attempt equal 2 save 2nd else save 1st in variable named year_one_attempt
        $year_one_attempt = \App\Models\Degree::where('user_id', $user->id)->where('course', 'اول')->orWhere('course', 'ثاني')->where('stage', 'First')->where('attempt', 2)->count() > 0 ? '2nd' : '1st';
        $year_two_attempt = \App\Models\Degree::where('user_id', $user->id)->where('course', 'اول')->orWhere('course', 'ثاني')->where('stage', 'Second')->where('attempt', 2)->count() > 0 ? '2nd' : '1st';
        $year_three_attempt = \App\Models\Degree::where('user_id', $user->id)->where('course', 'اول')->orWhere('course', 'ثاني')->where('stage', 'Third')->where('attempt', 2)->count() > 0 ? '2nd' : '1st';
        $year_four_attempt = \App\Models\Degree::where('user_id', $user->id)->where('course', 'اول')->orWhere('course', 'ثاني')->where('stage', 'Forth')->where('attempt', 2)->count() > 0 ? '2nd' : '1st';

        if ($query=='cert_en' || $query=='paper_en' || $query=='paper_en') {
            if ($total_avg >= 90) {
                $grade = 'Excellent';
            } elseif ($total_avg >= 80) {
                $grade = 'Very Good';
            } elseif ($total_avg >= 70) {
                $grade = 'Good';
            } elseif ($total_avg >= 60) {
                $grade = 'Medium';   
            } elseif($total_avg >= 50) {
                $grade = 'Pass';
            } else {
                $grade = 'Fail';
            }
        } elseif($query=="cert_ar" || $query=="endor_ar" || $query=="higher_ar"  || $query=='paper_ar') {
            if($year_one_attempt=='1st') {
                $year_one_attempt = 'الدور الأول';
            } else {
                $year_one_attempt = 'الدور الثاني';
            }

            if($year_two_attempt=='1st') {
                $year_two_attempt = 'الدور الأول';
            } else {
                $year_two_attempt = 'الدور الثاني';
            }

            if($year_three_attempt=='1st') {
                $year_three_attempt = 'الدور الأول';
            } else {
                $year_three_attempt = 'الدور الثاني';
            }

            if($year_four_attempt=='1st') {
                $year_four_attempt = 'الدور الأول';
            } else {
                $year_four_attempt = 'الدور الثاني';
            }

            if ($total_avg >= 90) {
                $grade = 'ممتاز';
            } elseif ($total_avg >= 80) {
                $grade = 'جيد جدا';
            } elseif ($total_avg >= 70) {
                $grade = 'جيد';
            } elseif ($total_avg >= 60) {
                $grade = 'مقبول';
            } else {
                $grade = 'راسب';
            }
        } else {}
        
        $year_one_degrees = [];
        for ($i=0; $i < count($year_four_course_one_degrees); $i++) { 
            $year_one_degrees[$i] = [$year_one_course_one_degrees[$i], $year_one_course_two_degrees[$i]];
        }

        $year_two_degrees = [];
        for ($i=0; $i < count($year_four_course_one_degrees); $i++) { 
            $year_two_degrees[$i] = [$year_two_course_one_degrees[$i], $year_two_course_two_degrees[$i]];
        }

        $year_three_degrees = [];
        for ($i=0; $i < count($year_four_course_one_degrees); $i++) { 
            $year_three_degrees[$i] = [$year_three_course_one_degrees[$i], $year_three_course_two_degrees[$i]];
        }

        $year_four_degrees = [];
        for ($i=0; $i < count($year_four_course_one_degrees); $i++) { 
            $year_four_degrees[$i] = [$year_four_course_one_degrees[$i], $year_four_course_two_degrees[$i]];
        }
        // if there is no 2nd or الدور الثاتي in year_one_attempt or year_two_attempt or year_three_attempt or year_four_attempt  then save 1st or الدور الأول in variable named final_attempt
        if ($year_one_attempt=='2nd' || $year_two_attempt=='2nd' || $year_three_attempt=='2nd' || $year_four_attempt=='2nd') {
            $final_attempt = '(Second Attempt)';
        } elseif($year_one_attempt=='1st' || $year_two_attempt=='1st' || $year_three_attempt=='1st' || $year_four_attempt=='1st') {
            $final_attempt = '(First Attempt)';
        } else {}

        // if there is no  الدور الثاتي in year_one_attempt or year_two_attempt or year_three_attempt or year_four_attempt  then save 1st or الدور الأول in variable named final_attempt
        if ($year_one_attempt=='الدور الثاني' || $year_two_attempt=='الدور الثاني' || $year_three_attempt=='الدور الثاني' || $year_four_attempt=='الدور الثاني') {
            $final_attempt = 'الدور (الثاني)';
        } elseif($year_one_attempt=='الدور الأول' || $year_two_attempt=='الدور الأول' || $year_three_attempt=='الدور الأول' || $year_four_attempt=='الدور الأول') {
            $final_attempt = 'الدور (الأول)';
        } else {}
        

        $all_data = [
            'user'=>$user,
            'year_one_course_one_degrees'=>$year_one_course_one_degrees,
            'year_one_course_one_degrees_avg'=>number_format((float)$year_one_course_one_degrees_avg, 3, '.', ''),
            'year_one_course_two_degrees'=>$year_one_course_two_degrees,
            'year_one_course_two_degrees_avg'=>number_format((float)$year_one_course_two_degrees_avg, 3, '.', ''),
            'year_two_course_one_degrees'=>$year_two_course_one_degrees,
            'year_two_course_one_degrees_avg'=>number_format((float)$year_two_course_one_degrees_avg, 3, '.', ''),
            'year_two_course_two_degrees'=>$year_two_course_two_degrees,
            'year_two_course_two_degrees_avg'=>number_format((float)$year_two_course_two_degrees_avg, 3, '.', ''),
            'year_three_course_one_degrees'=>$year_three_course_one_degrees,
            'year_three_course_one_degrees_avg'=>number_format((float)$year_three_course_one_degrees_avg, 3, '.', ''),
            'year_three_course_two_degrees'=>$year_three_course_two_degrees,
            'year_three_course_two_degrees_avg'=>number_format((float)$year_three_course_two_degrees_avg, 3, '.', ''),
            'year_four_course_one_degrees'=>$year_four_course_one_degrees,
            'year_four_course_one_degrees_avg'=>number_format((float)$year_four_course_one_degrees_avg, 3, '.', ''),
            'year_four_course_two_degrees'=>$year_four_course_two_degrees,
            'year_four_course_two_degrees_avg'=>number_format((float)$year_four_course_two_degrees_avg, 3, '.', ''),
            'year_one_avg' => number_format((float)(($year_one_course_one_degrees_avg + $year_one_course_two_degrees_avg) / 2), 3, '.', ''),
            'year_two_avg' => number_format((float)(($year_two_course_one_degrees_avg + $year_two_course_two_degrees_avg) / 2), 3, '.', ''),
            'year_three_avg' => number_format((float)(($year_three_course_one_degrees_avg + $year_three_course_two_degrees_avg) / 2), 3, '.', ''),
            'year_four_avg' => number_format((float)(($year_four_course_one_degrees_avg + $year_four_course_two_degrees_avg) / 2), 3, '.', ''),
            'data'=>$data,
            'image_url'=>'/storage/'.$data['picture'],
            'total_avg'=>$total_avg,
            'grade'=>$grade,
            'first_total_avg'=> $first_user_avg,
            'total_students'=> $total_students,
            'rank'=> $rank,
            'year_one_attempt'=>$year_one_attempt,
            'year_two_attempt'=>$year_two_attempt,
            'year_three_attempt'=>$year_three_attempt,
            'year_four_attempt'=>$year_four_attempt,
            'year_one_degrees'=>$year_one_degrees,
            'year_two_degrees'=>$year_two_degrees,
            'year_three_degrees'=>$year_three_degrees,
            'year_four_degrees'=>$year_four_degrees,
            'date'=>$data['date'],
            'final_attempt'=>$final_attempt,
        ];

        if($query == 'cert_en') {
            return view('certificates_interface.cert_en_show', $all_data);
        } elseif ($query == 'cert_ar') { 
            return view('certificates_interface.cert_ar_show', $all_data);
        } elseif ($query=='endor_ar') {
            return view('certificates_interface.endor_ar_show', $all_data);
        } elseif($query=='higher_ar') {
            return view('certificates_interface.higher_ar_show', $all_data);
        } elseif($query=='paper_ar') {
            return view('certificates_interface.paper_ar_show', $all_data);
        } else {
            return view('certificates_interface.paper_en_show', $all_data);
        }


    }
}
