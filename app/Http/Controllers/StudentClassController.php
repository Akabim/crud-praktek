<?php

namespace App\Http\Controllers;

use App\Models\StudentClass;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class StudentClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('studentclass.index', [
            'student_classes' => StudentClass::get(),
            'class' => StudentClass::paginate(5),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('studentclass.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $student_classes = new StudentClass();
        $student_classes->name = $request->name;
        $student_classes->slug = Str::slug($request->name);

        $student_classes->save();   

        return redirect()->route('class.index')->withSuccess('Data Berhasil Di Input');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('studentclass.show', [
            'student_classes' => StudentClass::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $student_classes = StudentClass::find($id);

        return view('studentclass.edit', [
            'student_classes' => $student_classes,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       

        $students_class = StudentClass::find($id); 

        $students_class->name = $request->name;
        $students_class->slug = Str::slug($request->name);

        $students_class->save();

        return redirect()->route('class.index')->withInfo('Data Berhasil Di rubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student_classes = StudentClass::find($id)->delete();
        return redirect()->route('class.index')->withDanger('Data Berhasil Di Hapus');
    }
}
