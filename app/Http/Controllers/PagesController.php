<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('pages.home');
    }
    public function teacherdash(){
        return view('pages.teachers.teacherdash');

    }
    public function teacherprofile(){
        return view('pages.teachers.teacherprofile');

    }
}
