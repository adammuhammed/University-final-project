<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserInterfaceController extends Controller
{
    public function list() {
       $q = request()->query('q');
       $students = \App\Models\User::where('isAdmin', false)->where('isManager', false);

       if($q) {
           $students = $students->where('name', 'LIKE', "%{$q}%")->orWhere('arabic_name', 'LIKE', "%{$q}%");
       }
       
       $students = $students->get();
       return view('students_interface.list', ['students'=> $students]);
    }   

    public function degree_list() {
        $q = request()->query('q');
        $students = \App\Models\User::where('isAdmin', false)->where('isManager', false)->with('degrees');

        if($q) {
            $students = $students->where('name', 'LIKE', "%{$q}%")->orWhere('arabic_name', 'LIKE', "%{$q}%");
        }

        $students = $students->get();
        return view('students_interface.degree', ['students'=> $students]);
    }

}
