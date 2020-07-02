<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Teacher;
use App\StudentClass;
use App\Subject;
use DB;
use File;
use Image;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $teachers = DB::table('teachers')
        //             ->join('student_classes', 'teachers.teacher_class', '=', 'student_classes.classes_id')
        //             ->join('subjects', 'teachers.subject', '=', 'subjects.subject_id')
        //             ->select('teachers.*', 'student_classes.*', 'subjects.*')
        //             ->get();

        $teachers = Teacher::all();
        return view('backend.teacher.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //n
        $teacher = new Teacher;

        $teacher->teachers_name_bangali = $request->teachers_name_bangali;
        $teacher->teachers_name_english = $request->teachers_name_english;
        $teacher->teachers_district = $request->teachers_district;
        $teacher->teachers_village = $request->teachers_village;
        $teacher->teachers_postoffice = $request->teachers_postoffice;
        $teacher->teacher_gender = $request->teacher_gender;
        $teacher->teacher_maritial_status = $request->teacher_maritial_status;
        $teacher->email = $request->email;
        $teacher->phone = $request->phone;
        $teacher->subject = $request->subject;

        $teacher->address = $request->address;
        $teacher->teacher_class = $request->class;
        $teacher->department = $request->department;
        $teacher->sallary = $request->sallary;
        $teacher->status =0;
        if (isset($request->teachers_photo)) {
            $image = $request->teachers_photo;
            $img = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('/images/teacher'.$img);
            Image::make($image)->save($location);
            $teacher->photo = $img;
        }
        $teacher->save();
        session()->flash('success', 'Teacher Added Successfully');
        return redirect()->route('admin.teacher');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Teacher Edit
        $teacher = Teacher::find($id);
        return view('backend.teacher.edit', compact('teacher'));
    }

    public function details($id)
    {
        //Teacher Edit
        $teacher = Teacher::find($id);
        return view('backend.teacher.details', compact('teacher'));
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
        //
        $teacher = Teacher::find($id);
        $teacher->teachers_name_bangali = $request->teachers_name_bangali;
        $teacher->teachers_name_english = $request->teachers_name_english;
        $teacher->teachers_district = $request->teachers_district;
        $teacher->teachers_village = $request->teachers_village;
        $teacher->teachers_postoffice = $request->teachers_postoffice;
        $teacher->teacher_gender = $request->teacher_gender;
        $teacher->teacher_maritial_status = $request->teacher_maritial_status;
        $teacher->email = $request->email;
        $teacher->phone = $request->phone;
        $teacher->subject = $request->subject;

        $teacher->address = $request->address;
        $teacher->teacher_class = $request->class;
        $teacher->department = $request->department;
        $teacher->sallary = $request->sallary;
        $teacher->status = 0;
        if (isset($request->teachers_photo)) {
            $image = $request->teachers_photo;
            $img = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('/images/teacher/'.$img);
            Image::make($image)->save($location);
            $teacher->photo = $img;
        }
        $teacher->save();
        session()->flash('success', 'Teacher Added Successfully');
        return redirect()->route('admin.teacher');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Teacher Delete
        $teacher = Teacher::find($id);
        $teacher->delete();
        session()->flash('success', 'Teacher Deleted Successfully');
        return redirect()->route('admin.teacher');
    }
}
