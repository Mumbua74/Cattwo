<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use App\Fees;
use App\Student;
use DateTime;


class FeesController extends Controller
{
	
	public function save(Request $req)
	{
		$validatedData = $req->validate([
        'student_number'=>'required|max:255',
        'full_name'=>'required',
        'amount'=>'required',
       

		]);

         // $user = Student::where('student_number','=', Input::get('student_number'))->get();

         // if(count($user)>0){

		$student_number = $req->input('student_number');
		$full_name=$req->input('full_name');
		$amount=$req->input('amount');
		$currentdate = new DateTime();
		$date_of_payment=$currentdate;

		$info = array('student_number' =>$student_number,'full_name'=>$full_name,'amount'=>$amount,'date_of_payment'=>$date_of_payment);

		DB::table('fees')->insert($info);

		echo "<script>alert('successfully Paid Fees')</script>";
		return view('faith_mumbua_mutinda.fees');
	// }
	// else
	// {
	// 	echo "<script>alert('Student Number does not match our records')</script>";
	// 	return view('faith_mumbua_mutinda.fees');

	// }
	}
	public function search(Request $req)
	{
		$student_number =$req->input('student_number');

		$fee = Fees::where('student_number',$student_number)->get();

		$sum = $fee->sum('amount');

		return view('faith_mumbua_mutinda.viewfees',compact('fee'),compact('sum'));



	}
	public function viewfeesall()
	{
		$fee = Fees::all();
		$sum = $fee->sum('amount');

		return view('faith_mumbua_mutinda.viewfeesall',compact('fee'),compact('sum'));
	}
    //
}
