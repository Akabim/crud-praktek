<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\StudentClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Scalar\MagicConst\Function_;

class StudentController extends Controller
{
    public function index()
    {
        return view ('student.index', [
            'students' => Student::paginate(5),
        ]); 
    }
    public function create()
    {
        return view('student.create', [
            'classes' => StudentClass::get()
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'min:3'],
            'address' => 'required',
            'phone_number' => ['required', 'numeric'],
            'class' => 'required',
            'photo' => ['image'],
        ]);

        $photoPath = '';

        if ($request->hasFile('photo')){
            $photoPath = $request->file('photo')->store('photo');
        }

        $students = new Student();
        $students->name = $request->name;
        $students->photo = $photoPath;
        $students->address = $request->address;
        $students->phone_number = $request->phone_number;
        $students->class = $request->class;
        $students->student_class_id = $request->student_class_id;
        
  
        $students->save();

            
        return redirect()->route('student.index')->withSuccess('Data Berhasil Di Input');
    }
    
    public function edit($id)
    {
       $students = Student::find($id);

        return view('student.edit', [
            'student' => $students,
            'classes' => StudentClass::get()
            
        ]);
    }

    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'name' => ['required', 'min:3'],
            'address' => 'required',
            'phone_number' => ['required', 'numeric'],
            'class' => 'required',
            'photo' => 'image',
        ]);
        
        $photoPath = '';

        // if ($request->hasFile('photo'))
        //     if(Student::find($id)->photo){
        //         Storage::delete(Student::find($id)->photo);
        //     }            
        // {
        //     $photoPath = $request->file('photo')->store('photo');
        //       }



        $students = Student::find($id); 

        $photo = $students->photo;

        if ($request->hasFile('photo')){
            if ($photo != null) {
                if (Storage::exists($photo)){
                    Storage::delete($photo);
                }
            }
            
            $photoPath = $request->file('photo')->store('photos');
        }

        $students->name = $request->name;
        $students->address = $request->address;
        $students->photo = $photoPath;
        $students->phone_number = $request->phone_number;
        $students->class = $request->class;
        $students->student_class_id = $request->student_class_id;

        $students->save();

        return redirect()->route('student.index')->withInfo('Data Berhasil Di rubah');
    }

    public function destroy($id)
    {
        $student = Student::find($id)->delete();
        return redirect()->route('student.index')->withDanger('Data Berhasil Di Hapus');
    }

    public function show($id)
    {
        $achievements = DB::table('achievements')
            ->join('students', 'students.id', '=', 'achievements.student_id')
            ->where('achievements.student_id', '=', $id)
            ->select('students.name as student_name', 'students.id as student_id','achievements.*')
            ->get();

        return $achievements;
    }

}
