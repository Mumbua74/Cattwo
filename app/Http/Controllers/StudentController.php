<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Student; 

class StudentController extends Controller
{
	public function save(Request $req)
	{
		$validatedData = $req->validate([
        'student_number'=>'required|unique:students|max:255',
        'full_name'=>'required',
        'address'=>'required',
        'date_of_birth'=>'required',

		]);

		$student_number = $req->input('student_number');
		$full_name=$req->input('full_name');
		$address=$req->input('address');
		$date_of_birth=$req->input('date_of_birth');

		$info = array('student_number' =>$student_number,'full_name'=>$full_name,'address'=>$address,'date_of_birth'=>$date_of_birth );

		DB::table('students')->insert($info);

		echo "<script>alert('successfully registered student')</script>";
		return view('faith_mumbua_mutinda.student');
	}
    //
}
