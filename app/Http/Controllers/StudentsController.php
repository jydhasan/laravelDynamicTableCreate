<?php
// app/Http/Controllers/StudentsController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentsController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function showStudents(){
        $students = DB::table('students')->get();
        // pass data to students view
        return view('students', ['students' => $students]);
    }
}
