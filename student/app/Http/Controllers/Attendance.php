<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
class Attendance extends Controller
{
    public function addsheet() {

        $today = Carbon::today();
        $rollNumbers = [];
        $students = DB::select('SELECT roll_number FROM student');

        foreach ($students as $student) {
            $rollNumbers[] = $student->roll_number;
        }
          foreach ($rollNumbers as $rollNo) {
           DB::table('attendance')->insert([
               'roll_number' => $rollNo,
               'date' => $today,
               'status' => 'absent',
               'created_at' => now(),
               'updated_at' => now(),
           ]);
    }
    return view('welcome');
 }


    public function attendancelist() {
        $date = Carbon::today();
        $users = DB::select('SELECT s.name, s.roll_number, a.status FROM student s JOIN attendance a ON s.roll_number = a.roll_number');
        return view('attendance_list_view', ['users' => $users,'selectedDate' => $date]);
    }

     public function makePresent($id) {
        $update = DB::update('update attendance set status = "present" where roll_number = ?', [$id]);
        return back()->with('success', 'Student Mared Present!');
    }

     public function makeAbsent($id) {
        $update = DB::update('update attendance set status = "absent" where roll_number = ?', [$id]);
        return back()->with('success', 'Student Mared Present!');
    }

    public function student($id) {
        $name = DB::select('SELECT name FROM student where roll_number = ?', [$id]);
        $rollno =  DB::select('SELECT roll_number FROM student where roll_number = ?', [$id]);
        $users = DB::select('SELECT s.name, s.roll_number, a.date, a.status FROM student s JOIN attendance a ON s.roll_number = a.roll_number');
        return view('student_view', ['users' => $users,'Name' => $name,'RollNo' => $rollno]);
    }


}