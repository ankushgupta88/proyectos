<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;
use Auth;
use Illuminate\Support\Facades\Crypt;
use App\Models\Student;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Writer\Xls;

class Dashboard extends Controller
{
     function index(Request $request){
                $total_active = DB::table('students')->where('course','1')->where('status','0')->where('role','2')->get();
                $total_enrolled = DB::table('students')->where('course','1')->where('status','1')->where('role','2')->get();
                $total_completed = DB::table('students')->where('course','1')->where('status','2')->where('role','2')->get();
                $total_inactive = DB::table('students')->where('course','1')->where('status','3')->where('role','2')->get();
                
                $active_students = count($total_active); 
                $enrolled_students = count($total_enrolled);        
                $completed_students = count($total_completed); 
                $inactive_students = count($total_inactive); 

                $st = DB::table('students')->where('course','1')->where('role','2')->count();
                
                $total = DB::table('students')->where('role','2')->count();
               
                $percentage = $st / $total * 100;
                
                $data = [
                    'active_students' => $active_students,
                    'enrolled_students' => $enrolled_students,
                    'completed_students' => $completed_students,
                    'inactive_students' => $inactive_students,
                    'percentage' => $percentage,
                ];  

                return view('pages.dashboard')->with($data);
         
        }
        
            public function showstudents(Request $request)
            {
                
                $total_active = DB::table('students')->where('course',$request->input('course'))->where('status','0')->where('role','2')->get();
                $total_enrolled = DB::table('students')->where('course',$request->input('course'))->where('status','1')->where('role','2')->get();
                $total_completed = DB::table('students')->where('course',$request->input('course'))->where('status','2')->where('role','2')->get();
                $total_inactive = DB::table('students')->where('course',$request->input('course'))->where('status','3')->where('role','2')->get();
                
                $active_students = count($total_active); 
                $enrolled_students = count($total_enrolled);        
                $completed_students = count($total_completed); 
                $inactive_students = count($total_inactive); 

                $st = DB::table('students')->where('course',$request->input('course'))->where('role','2')->count();
                
                $total = DB::table('students')->where('role','2')->count();
               
                $percentage = $st / $total * 100;
                
                $data = [
                    'active_students' => $active_students,
                    'enrolled_students' => $enrolled_students,
                    'completed_students' => $completed_students,
                    'inactive_students' => $inactive_students,
                    'percentage' => $percentage,
                ];  

                return view('pages.dashboard')->with($data);
        
    
            }

            public function export() {
                $employees = Student::all();
                $spreadsheet = new Spreadsheet();
                $sheet = $spreadsheet->getActiveSheet();
                $sheet->setCellValue('A1', 'Id');
                $sheet->setCellValue('B1', 'Username');
                $sheet->setCellValue('C1', 'Name');
                $sheet->setCellValue('D1', 'Surname');
                $sheet->setCellValue('E1', 'Email');
                $sheet->setCellValue('F1', 'Age');             
                $rows = 2;
                foreach($employees as $empDetails){ 
                    $sheet->setCellValue('A' . $rows, $empDetails['id']);
                    $sheet->setCellValue('B' . $rows, $empDetails['username']);
                    $sheet->setCellValue('C' . $rows, $empDetails['name']);
                    $sheet->setCellValue('D' . $rows, $empDetails['surname']);
                    $sheet->setCellValue('E' . $rows, $empDetails['mail']);
                    $sheet->setCellValue('F' . $rows, $empDetails['age']);
                    $rows++;        
                }      
                $fileName = "emp.xlsx";
              
                    $writer = new Xlsx($spreadsheet);
                      
                $writer->save("export/".$fileName);
                header("Content-Type: application/vnd.ms-excel");
               echo "success"; die();  
            }
			
			
}
