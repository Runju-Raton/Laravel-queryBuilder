<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    //
    public function insertStudent(){
        $result=DB::table('students')->insert(['name'=>'Tonmoy','age'=>'24','city'=>'Barisal']);
        if($result==true){
            return "<h1>Insert Data successful!</h1>";
        }
        else{
            return "<h1>Failed to insert Data.</h1>";
        }
        
    }
}
