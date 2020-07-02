<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Student;
use App\Income;
use DB;

class SmsController extends Controller
{
    public $number;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('backend.sms.index');
    }

    public function sendSms($clas, $month, $message)
    {

         $student_id = DB::table('incomes')
                            ->where('payment_month', $month)
                            ->select('incomes.student_id')
                            ->get();
            $count = count($student_id);
            $arra[] = "";
            for ($i=0; $i < $count; $i++) {
             $arra[] += $student_id[$i]->student_id;
            }
        $students = DB::table('students')
                    ->where('class_id', $clas)

                    ->whereNotIn('students.student_roll', $arra)
                    ->select('students.father_mobile')
                    ->get();
        $count =  count($students);
            $arr[] = "";
            for ($i=0; $i < $count; $i++) {
             $arr[] += $students[$i]->father_mobile;
            }
            
            $cho = implode(" ", $arr);


$url = "http://66.45.237.70/api.php";
$data= array(
'username'=>"alam173285",
'password'=>"SX8V4TCG",
'number'=>"$cho",
'message'=>"$message"
);

$ch = curl_init(); // Initialize cURL
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$smsresult = curl_exec($ch);
$p = explode("|",$smsresult);
$sendstatus = $p[0];
 if($sendstatus == '1101'){
    return "Success";
 } 

}
    public function studentfee($clas, $month)
    {
        
            $student_id = DB::table('incomes')
                            ->where('payment_month', $month)
                            ->select('incomes.student_id')
                            ->get();
            $count = count($student_id);
            $arra[] = "";
            for ($i=0; $i < $count; $i++) {
             $arra[] += $student_id[$i]->student_id;
            }
        $students = DB::table('students')
                    ->where('class_id', $clas)

                    ->whereNotIn('students.student_roll', $arra)
                    ->get();
        return $students;
    }

    public function vipsms(Request $request){

        $number = count($request->vipnumber);

        $arrnum[] = '';
        for ($i=0; $i <$number ; $i++) { 
            $arrnum[] += $request->vipnumber[$i];
        }
        $ar = implode(' ', $arrnum);
        $arr = ltrim($ar, $ar[0]);
        $message = $request->message;

        $url = "http://66.45.237.70/api.php";
        $data= array(
        'username'=>"alam173285",
        'password'=>"SX8V4TCG",
        'number'=>"$arr",
        'message'=>"$message"
        );

        $ch = curl_init(); // Initialize cURL
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $smsresult = curl_exec($ch);
        $p = explode("|",$smsresult);
        $sendstatus = $p[0];
         if($sendstatus == '1101'){
            session()->flash('success', 'Message Send Successfully');
            return redirect()->route('admin.sms');
         }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

    public function sendaware($class, $message)
    {
        
        $students = DB::table('students')
                    ->join('student_classes', 'students.class_id', 'student_classes.classes_id')
                    ->where('class_name', 'LIKE', "%{$class}%")
                    ->orWhere('student_name_english', 'LIKE', "%{$class}%")
                    ->orWhere('student_village', 'LIKE', "%{$class}%")
                    ->orWhere('student_roll', 'LIKE', "%{$class}%")
                    ->orWhere('status', 'LIKE', "%{$class}%")
                    ->orWhere('father_name_english', 'LIKE', "%{$class}%")
                    ->select('students.father_mobile')
                    ->get();
        $count =  "3";
       
            $arr[] = "";
            for ($i=0; $i < $count; $i++) {
             $arr[] += $students[$i]->father_mobile;
            }

            
            $cho = implode(" ", $arr);
dd($cho);





        $url = "http://66.45.237.70/api.php";
        $data= array(
        'username'=>"alam173285",
        'password'=>"SX8V4TCG",
        'number'=>"$cho",
        'message'=>"$message"
        );

        $ch = curl_init(); // Initialize cURL
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $smsresult = curl_exec($ch);
        $p = explode("|",$smsresult);
        $sendstatus = $p[0]; 
         if($sendstatus == '1101'){
            return "Success";
         } 
    }
}
