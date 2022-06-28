<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Teacher;

class LoginController extends Controller
{
    public function Login(){

        return view('pages.login');
    }
    public function loginSubmit(Request $request){
        $validate=$request->validate([


            't_username'=>'required',
            't_password'=>'required',
       ],
       [
           't_username.required'=>'Username required!',
           't_password.required'=>'Password required!',
           
           
       ]
       
       );

       $Teacher = Teacher::where('t_username',$request->t_username)
       ->where('t_password',$request->t_password)
       ->first();

        if($Teacher){
        $request->session()->put('teacher_id',$Teacher->id);
        $request->session()->put('teacher_name',$Teacher->t_username);
        return redirect()->route('teacherdash');
       

    }
    return back();


}

        public function logout(){   
                session()->forget('teacher_id');
                return redirect()->route('login');
            }



            public function teacherdash(){

                $Teacher=Teacher::where('id',Session()->get('teacher_id'))->first();
       
                return view('pages.teachers.teacherdash')->with('Teacher',$Teacher);
           }
}
