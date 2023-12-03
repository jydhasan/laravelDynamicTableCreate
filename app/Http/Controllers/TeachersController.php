<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;


class TeachersController extends Controller
{
    public function InsertTeacher(){
        // if teacher table doee not exist then create it
        if(!Schema::hasTable('teachers')){
            Schema::create('teachers', function (Blueprint $table) {
                $table->id();
                $table->string('teacher_name');
                $table->string('teacher_email');
                $table->timestamps();
            });
        }else{
            // echo "Teacher table already exists";
            // insert data into teachers table
            DB::table('teachers')->insert([
                ['teacher_name' => 'John Doe', 'teacher_email' => 'patsala@gmail.com'],
                ['teacher_name' => 'Jane Doe', 'teacher_email' => 'zahid@gmail.com']
            ]);
            echo "Data inserted successfully";
        }
    }
    // show teachers data
    public function showTeachers(){
        $teachers = DB::table('teachers')->get();
        // pass data to teachers view
        return view('teachers', ['teachers' => $teachers]);
    }
}
