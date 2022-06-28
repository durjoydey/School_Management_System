<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Teacher;

class TeacherController extends Controller
{
    public function Create(){
        return view('pages.teachers.create');
    }
    public function createSubmit(Request $request){
       
        $this->validate(
            $request,
            [
                't_name'=>'required|min:5|max:20',
                't_phone'=>'required|min:11||max:15||unique:teachers,t_phone|regex:/^([0-9\s\-\+\(\)]*)$/',
                't_address'=>'required',
                't_username'=>'required|min:6|max:12',
                't_email'=>'required|regex:/(.+)@(.+)\.(.+)/i|unique:teachers,t_email',
                't_password'=>'required|min:7|max:15',
                't_dept'=>'required',
              
            ],
            [
                't_name.required'=>'Name Required!',
                't_name.min'=>'Name must have minimum 5 charcters',
                't_name.max'=>'Name must have maximum 20 charcaters!',
                't_phone.required'=>'Phone Number Required!',
                't_phone.regex'=>'Phone number must be numeric',
                't_phone.min'=>'Phone Number must have minimum 11 charcters',
                't_phone.max'=>'Name must have maximum 15 charcaters!',
                't_address.required'=>'Address Required!',
                't_username.required'=>'Username Required!',
                't_username.min'=>'Username must have minimum 6 charcaters!',
                't_username.max'=>'Username must have maximum 12 charcaters!',
                't_email.required'=>'Email Required!',
                't_email.email'=>'Email is not valid!',
                't_password.required'=>'Passsword Required!',
                't_password.min'=>'Password must have minimum 7 charcters',
                't_password.max'=>'Password must have maximum 15 charcters',
                't_dept.required'=>'Teacher Department Required!',
               
        
            ]
        );
        $var = new Teacher();
       
        $var->t_name= $request->t_name;
        $var->t_phone= $request->t_phone;
        $var->t_address= $request->t_address;
        $var->t_username= $request->t_username;
        $var->t_email= $request->t_email;
        $var->t_password= $request->t_password;
        $var->t_dept= $request->t_dept;
        $var->t_profileimg= $request->t_profileimg;
        $var->save();


        return redirect()->route('login');
    }
    public function edit(Request $request){
        //
        $id = $request->id;
        $teachers = Teacher::where('id',$id)->first();
        return view('pages.teachers.edit')->with('teachers', $teachers);

    }
    public function editSubmit(Request $request){
        $var = Teacher::where('id',$request->id)->first();
        $var->t_name= $request->t_name;
        $var->t_phone= $request->t_phone;
        $var->t_address= $request->t_address;
        $var->t_username= $request->t_username;
        $var->t_email= $request->t_email;
        $var->t_password= $request->t_password;
        $var->t_dept= $request->t_dept;
        $var->t_profileimg= $request->t_profileimg;
        $var->save();
      
        return redirect()->route('teacher.list');

    }
    public function list(){

        $teachers = Teacher::all();
        return view('pages.teachers.list')->with('teachers',$teachers);
    }
    public function delete(Request $request){
        $var = Teacher::where('id',$request->id)->first();
        $var->delete();
        return redirect()->route('teacher.list');

    }
}
