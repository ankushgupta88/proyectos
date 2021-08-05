<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;
use Auth;
use Illuminate\Support\Facades\Crypt;
use App\Models\Student;

class Tutordashboard extends Controller
{
     function index(Request $request){
               
     			 $courses = DB::table('courses')->where('deleted','0')->get();
                 $coursedata=DB::table('students')
					->select('students.*','courses.id as cid','courses.name as cname','courses.letra')
					->leftjoin('courses','courses.id','=','students.course')
					->where('students.id','=',$request->session()->get('userid'))
					->first();
					

				$data = [
					'coursename' => $coursedata,
					'courses' => $courses,
				];
                return view('pages.tutordashboard')->with($data);
         
        }
        
            
			
			
}
