<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Student;
use App\StudentClass;
use DB;
use File;
use Image;
 
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $classes = DB::table('student_classes')
                    ->get();
        return view('backend.student.index', compact('classes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function create()
    {
        //
        $student_classes = StudentClass::all();
        return view('backend.student.create', compact('student_classes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $students = new Student;
        $students->class_id = $request->class_id;
        $students->division = $request->division;
        $students->section = $request->section;
        $students->student_roll = $request->student_roll;
        $students->education_year = $request->education_year;
        $students->student_name_bangali = $request->student_name_bangali;
        $students->student_name_english = $request->student_name_english;
        $students->student_birth = $request->student_birth;
        $students->student_year = $request->student_year;
        $students->student_sex = $request->student_sex;
        $students->student_religion = $request->student_religion;
        $students->student_nationality = $request->student_nationality;
        $students->father_name_bangali = $request->father_name_bangali;
        $students->father_name_english = $request->father_name_english;
        $students->father_occupation = $request->father_occupation;
        $students->father_income = $request->father_income;
        $students->father_mobile = $request->father_mobile;
        $students->mother_name_bangali = $request->mother_name_bangali;
        $students->mother_name_english = $request->mother_name_english;
        $students->past_institute_name = $request->past_institute_name;
        $students->past_institute_class = $request->past_institute_class;
        $students->student_village = $request->student_village;
        $students->student_postoffice = $request->student_postoffice;
        $students->student_permanent_village = $request->student_permanent_village;
        $students->student_permanent_postoffice = $request->student_permanent_postoffice;
        $students->local_guardian_village = $request->local_guardian_village;
        $students->local_guardian_postoffice = $request->local_guardian_postoffice;
        $students->local_guardian_district = $request->local_guardian_district;
        $students->local_guardian_phone = $request->local_guardian_phone;
        $students->institute_car = $request->institute_car;
        $students->music_interested = $request->music_interested;
        
        //image store
        if (isset($request->student_photo)) {
                $image = $request->student_photo;
                $img = time().'.'.$image->getClientOriginalExtension();
                $location = public_path('images/student/'.$img);
                Image::make($image)->save($location);
            $students->student_photo = $img;
        }
        if (isset($request->father_photo)) {
                $image = $request->father_photo;
                $img = time().'.'.$image->getClientOriginalExtension();
                $location = public_path('images/student/father/'.$img);
                Image::make($image)->save($location);
            $students->father_photo = $img;
        }
        if (isset($request->mother_photo)) {
                $image = $request->mother_photo;
                $img = time().'.'.$image->getClientOriginalExtension();
                $location = public_path('images/student/mother/'.$img);
                Image::make($image)->save($location);
            $students->mother_photo = $img;
        }
        $students->save();
        session()->flash('success', 'Student Added Successfully');
        return redirect()->route('admin.student');
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
        //
        $student_classes = StudentClass::all();
        $students = Student::where('students_id', $id)->first();

        return view('backend.student.edit', compact('students' ,'student_classes'));
    }

    public function details($id)
    {
        //
        $student_classes = StudentClass::all();
        $students = Student::where('students_id', $id)->first();

        return view('backend.student.details', compact('students' ,'student_classes'));
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
        $students  = Student::where('students_id', $id)->first();
        print_r($students);
        $students->class_id = $request->class_id;
        $students->division = $request->division;
        $students->section = $request->section;
        $students->student_roll = $request->student_roll;
        $students->education_year = $request->education_year;
        $students->student_name_bangali = $request->student_name_bangali;
        $students->student_name_english = $request->student_name_english;
        $students->student_birth = $request->student_birth;
        $students->student_year = $request->student_year;
        $students->student_sex = $request->student_sex;
        $students->student_religion = $request->student_religion;
        $students->student_nationality = $request->student_nationality;
        $students->father_name_bangali = $request->father_name_bangali;
        $students->father_name_english = $request->father_name_english;
        $students->father_occupation = $request->father_occupation;
        $students->father_income = $request->father_income;
        $students->father_mobile = $request->father_mobile;
        $students->mother_name_bangali = $request->mother_name_bangali;
        $students->mother_name_english = $request->mother_name_english;
        $students->past_institute_name = $request->past_institute_name;
        $students->past_institute_class = $request->past_institute_class;
        $students->student_village = $request->student_village;
        $students->student_postoffice = $request->student_postoffice;
        $students->student_permanent_village = $request->student_permanent_village;
        $students->student_permanent_postoffice = $request->student_permanent_postoffice;
        $students->local_guardian_village = $request->local_guardian_village;
        $students->local_guardian_postoffice = $request->local_guardian_postoffice;
        $students->local_guardian_district = $request->local_guardian_district;
        $students->local_guardian_phone = $request->local_guardian_phone;
        $students->institute_car = $request->institute_car;
        $students->music_interested = $request->music_interested;
        //image store
        if (isset($request->student_photo)) {
                $image = $request->student_photo;
                $img = time().'.'.$image->getClientOriginalExtension();
                $location = public_path('images/student/'.$img);
                Image::make($image)->save($location);
            $students->student_photo = $img;
        }
        if (isset($request->father_photo)) {
                $image = $request->father_photo;
                $img = time().'.'.$image->getClientOriginalExtension();
                $location = public_path('images/student/father/'.$img);
                Image::make($image)->save($location);
            $students->father_photo = $img;
        }
        if (isset($request->mother_photo)) {
                $image = $request->mother_photo;
                $img = time().'.'.$image->getClientOriginalExtension();
                $location = public_path('images/student/mother/'.$img);
                Image::make($image)->save($location);
            $students->mother_photo = $img;
        }
        $students->save();
        session()->flash('success', 'Student Updated Successfully');
        return redirect()->route('admin.student');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Student Delete
        $student = Student::find($id);
        $student->delete();
        session()->flash('success', 'Student Deleted Successfully');
        return redirect()->route('admin.student');
    }

    public function getStudent($id)
    {
        $class = $id;
        $students = DB::table('students')
                    ->join('student_classes', 'students.class_id', 'student_classes.classes_id')
                    ->where('class_name', 'LIKE', "%{$class}%")
                    ->orWhere('student_name_english', 'LIKE', "%{$class}%")
                    ->orWhere('student_village', 'LIKE', "%{$class}%")
                    ->orWhere('student_roll', 'LIKE', "%{$class}%")
                    ->orWhere('status', 'LIKE', "%{$class}%")
                    ->orWhere('father_name_english', 'LIKE', "%{$class}%")
                    ->get();
        return $students;
    }   
}
