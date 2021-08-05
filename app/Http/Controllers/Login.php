<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;
use Auth;
use Illuminate\Support\Facades\Crypt;
use App\Models\Student;

class Login extends Controller
{
     function index(Request $req){
         
            $validatedData = $req->validate([
                'email' => 'required|email',
                'password' => 'required',
                'role' => 'required'
            ]);
          
            $result = DB::table('students')
            ->where('mail',$req->input('email'))
            ->get();
            
            $res = json_decode($result,true);
            if(sizeof($res)==0){
            $req->session()->flash('error','Email Id does not exist. Please register yourself first');
            echo "Email Id Does not Exist.";
            return redirect('login');
            }
            else{
			$isStudent = $this->checkrole($req->input('email'),$req->input('role'));
			if(!$isStudent){
				$req->session()->flash('error','Enter student is not registered as student role');
				return redirect('login');
				}
            $encrypted_password = $result[0]->password;
			
            $decrypted_password = crypt::decrypt($encrypted_password);
            if($decrypted_password == $req->input('password')){
            echo "You are logged in Successfully";
            $req->session()->put('user',$result[0]->name);
            $req->session()->put('userid',$result[0]->id);
            $req->session()->put('userrole',$req->input('role'));
                if($req->input('role') == "2"){ 
                    return redirect('dashboard');
                }
                else{
                    return redirect('tutordashboard');
                }
            }
            else{
            $req->session()->flash('error','Password Incorrect!!!');
            echo "Email Id Does not Exist.";
            return redirect('login');
            }
            }
        }
        
        public function logout(Request $request) {
         auth()->logout();
			Session()->flush();
			return redirect('login');
        }
        
        function registerUser(Request $req){
		
                $validateData = $req->validate([
                'rut' => 'required|regex:/^[a-z A-Z]+$/u',
                'pseudonym' => 'required',
                'surname' => 'required',
                'commune' => 'required',
                'college' => 'required',
                'course' => 'required',
                'name' => 'required|regex:/^[a-z A-Z]+$/u',
                'email' => 'required|email',
                'password' => 'required|min:6|max:12',
                'confirmpassword' => 'required|same:password',
                'age' => 'numeric|required|digits:2'
                ]);
                $result = DB::table('students')->where('mail',$req->input('email'))->get();
                $res = json_decode($result,true);
               
                if(sizeof($res)==0){
                    $data = $req->input();
                    $student = new Student;
                    $student->role = $data['role'];
                    $student->status = $data['status'];
                    $student->username = $data['rut'];
                    $student->name = $data['name'];
                    $student->mail = $data['email'];
                    $encrypted_password = crypt::encrypt($data['password']);
                    $student->password = $encrypted_password;
                    $student->course = $data['course'];
					$student->registration_date = date('Y-m-d H:i:s');
                    $student->college = $data['college'];
                    $student->commune = $data['commune'];
                    $student->age = $data['course'];
                    $student->surname = $data['surname'];
                    $student->pseudonym = $data['pseudonym'];
                    $student->deleted = 0;
                    $student->save();
                    $req->session()->flash('register_status','User has been registered successfully');
					return redirect('/register');
                }
                else{
                  $req->session()->flash('register_status','This Email already exists.');
                   return redirect('/register');
                }
            }
            
			
			
			function registerTutor(Request $req){
		
                $validateData = $req->validate([
                'rut' => 'required|regex:/^[a-z A-Z]+$/u',
                'pseudonym' => 'required',
                'surname' => 'required',
                'commune' => 'required',
                'college' => 'required',
                'course' => 'required',
                'name' => 'required|regex:/^[a-z A-Z]+$/u',
                'email' => 'required|email',
                'password' => 'required|min:6|max:12',
                'confirmpassword' => 'required|same:password',
                'age' => 'numeric|required|digits:2'
                ]);
                $result = DB::table('students')->where('mail',$req->input('email'))->get();
                $res = json_decode($result,true);
               
                if(sizeof($res)==0){
                    $data = $req->input();
                    $student = new Student;
                    $student->role = $data['role'];
                    $student->status = $data['status'];
                    $student->username = $data['rut'];
                    $student->name = $data['name'];
                    $student->mail = $data['email'];
                    $encrypted_password = crypt::encrypt($data['password']);
                    $student->password = $encrypted_password;
                    $student->course = $data['course'];
					$student->registration_date = date('Y-m-d H:i:s');
                    $student->college = $data['college'];
                    $student->commune = $data['commune'];
                    $student->age = $data['course'];
                    $student->surname = $data['surname'];
                    $student->pseudonym = $data['pseudonym'];
                    $student->deleted = 0;
                    $student->save();
                    $req->session()->flash('register_status','User has been registered successfully');
					return redirect('/register');
                }
                else{
                  $req->session()->flash('register_status','This Email already exists.');
                   return redirect('/register');
                }
            }
			
            public function register()
            {
            $courses = DB::table('courses')->where('deleted','0')->get();
            $colleges = DB::table('colleges')->where('deleted','0')->get();
            $communes = DB::table('communes')->where('deleted','0')->get();
           
            $data = [
                    'courses' => $courses,
                    'colleges' => $colleges,
                    'communes' => $communes
                ];  
            return view('pages.registration')->with($data);
            }
			
			public function checkrole($studentemail,$role){
			$isStudent = true;
			$result = DB::table('students')
					->where('mail',$studentemail)
					->where('role',$role)
					->get();
			$res = json_decode($result,true);
            if(sizeof($res) == 0){
				$isStudent = false;
			}
			 return $isStudent;
			}
}
