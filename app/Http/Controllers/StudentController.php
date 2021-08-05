<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
       $students = Student::all(); //fetch all blog posts from DB
	return $students; //returns the fetched posts
    }

    public function create()
    {
        //show form to create a blog post
    }

   
    public function store(Request $request)
    {
        //store a new post
    }

    public function show(Student $student)
    {
        //show a blog post
    }

    
    public function edit(Student $student)
    {
        //show form to edit the post
    }

    
    public function update(Request $request, Student $student)
    {
        //save the edited post
    }

    
    public function destroy(Student $student)
    {
        //delete a post
    }
}
