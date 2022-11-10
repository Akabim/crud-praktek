<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use PhpParser\Node\Scalar\MagicConst\Function_;

class StudentController extends Controller
{
    public function index()
    {
        return view ('student.index', [
            'students' => Student::get(),
        ]);
    }
    public function create()
    {
        return view('student.create');
    }

    public function store(Request $request)
    {
        $students = new Student();
        $students->name = $request->name;
        $students->address = $request->address;
        $students->phone_number = $request->phone_number;
        $students->class = $request->class;

        $students->save();

            
        return ;
    }
    
    public function edit($id)
    {
       $students = Student::find($id);

        return view('student.edit', [
            'student' => $students,
        ]);
    }

    public function update(Request $request, $id)
    {
        $students = Student::find($id); 
        $students->name = $request->name;
        $students->address = $request->address;
        $students->phone_number = $request->phone_number;
        $students->class = $request->class;

        $students->save();

        return back();
    }

    public function delete($id)
    {
        $students = Student::find($id);
        $students->delete();
        return back();
    }

}
