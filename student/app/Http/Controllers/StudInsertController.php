<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;

class StudInsertController extends Controller
{
    public function create()
    {
        return view('student_form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'roll_number' => 'required|unique:student,roll_number',
        ]);

       // Using raw SQL
        DB::insert('insert into student (name, roll_number) values(?, ?)', [
            $request->name,
            $request->roll_number
        ]);

        // return back()->with('success', 'Student inserted successfully!');
        return view('student_form');
    }
}

