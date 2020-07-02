<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Student;
use App\StudentClass;
use App\Exam;
use App\Subject;
use App\Marks;
use DB;

class MarksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $classes = StudentClass::all();
        $subjects = Subject::all();
        $exams = Exam::all();
        return view('backend.marks.index', compact('classes', 'subjects', 'exams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $classes = StudentClass::all();
        $subjects = Subject::all();
        $exams = Exam::all();
        return view('backend.marks.create', compact('classes', 'subjects', 'exams'));
    }

    public function getStudetails(Request $request)
    {
            $class_id = $request->class;
        $division = $request->division;
        $student_roll = $request->student_roll;
        $exam_id = $request->exam;
        $subject_id = $request->subject;
        if (isset($class_id)  && isset($student_roll)) {

        

            $students = DB::table('students')
                    ->where('class_id', $class_id)
                    ->where('student_roll', $student_roll)
                    ->join('student_classes', 'students.class_id', '=', 'student_classes.classes_id')
                    ->get();

                    return view('backend.marks.submit', compact('students', 'exam_id', 'subject_id', 'class_id'));
        }elseif(isset($class_id)){

            $students = DB::table('students')
                    ->where('class_id', $class_id)
                    ->join('student_classes', 'students.class_id', '=', 'student_classes.classes_id')
                    ->get();

                    return view('backend.marks.submit', compact('students', 'exam_id', 'subject_id', 'class_id'));
        }elseif(isset($student_roll)){
            $students = DB::table('students')
                    ->where('student_roll', $student_roll)
                    ->join('student_classes', 'students.class_id', '=', 'student_classes.classes_id')
                    ->get();

                    return view('backend.marks.submit', compact('students', 'exam_id', 'subject_id', 'class_id'));
        }
       
        
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
        
        if (count($request->marks) > 0) {
            foreach ($request->marks as $key => $v) {
                $mark = $request->marks[$key];
                $data = array(
                    'marks_class_id'=> $request->class_id[$key],
                    'section_id' => 0,
                    'semister_id' => $request->exam_id[$key],
                    'student_id' => $request->students_id[$key],
                    'subject_id' => $request->subject_id[$key],
                    'marks' => $mark,
                    'marks_point' => ($mark >= 80? 5: ($mark >= 70 ? 4: ($mark >= 60 ? '3.50':($mark >= 50 ? '3':($mark >= 40 ? 2:($mark >= 33 ? '1' :'')))))),

                    'marks_grade' => ($mark >= 80? 'A+': ($mark >= 70 ? 'A': ($mark >= 60 ? 'A-':($mark >= 50 ? 'B':($mark >= 40 ? 'C':($mark >= 33 ? 'D' :'F')))))),
        


                );
                Marks::insert($data);
            }
            return redirect()->route('admin.marks.create');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
        $class = $request->class_id;
        $semister_id = $request->exam;

        $marks = DB::table('students')
                ->where('class_id', $class)
                ->get();

        // $marks = DB::table('marks')
        //         ->join('students', 'marks.student_id', 'students.students_id')
        //         ->join('exams', 'marks.semister_id', 'exams.exams_id')
        //         ->join('student_classes', 'marks.marks_class_id', 'student_classes.classes_id')
        //         ->where('marks_class_id', $class)
        //         ->where('semister_id', $exam_id)
        //         ->select('marks.*', 'students.*', 'exams.*', 'student_classes.*')
        //         ->get();
        // $class_name = $marks[0]->class_name;
        // $exam_name = $marks[0]->exam_name;

        return view('backend.marks.marksheet', compact('marks', 'semister_id'));
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function print(Request $request)
    {
        $class_id = $request->class_id;
        $exam_id = $request->exam_id;
        $students_id = $request->students_id;

        $marks = DB::table('marks')
                ->join('students', 'marks.student_id', 'students.students_id')
                ->join('exams', 'marks.semister_id', 'exams.exams_id')
                ->join('student_classes', 'marks.marks_class_id', 'student_classes.classes_id')
                ->join('subjects', 'marks.subject_id', 'subjects.subject_id')
                ->where('marks_class_id', $class_id)
                ->where('semister_id', $exam_id)
                ->where('student_id', $students_id)
                ->select('marks.*', 'students.*', 'exams.*', 'student_classes.*', 'subjects.*')
                ->get();
            $name = $marks[0]->student_name_english;
            $class = $marks[0]->class_name;
            $exam = $marks[0]->exam_name;
        return view('backend.marks.printmarksheet', compact('marks', 'name', 'class', 'exam'));


    }
}
