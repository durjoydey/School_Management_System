@extends('layouts.app')
@section('content')
@if(Session::get('teacher_id')) 
<form action="{{route('teacher.edit')}}" class="col-md-6" method="post">
<h1>Edit Your Imformation</h1>
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$teachers->id}}">
        <div class="col-md-4 form-group">
            <span>Name</span>
            <input type="text" name="t_name" value="{{$teachers->t_name}}" class="form-control">
            @error('t_name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Phone</span>
            <input type="text" name="t_phone" value="{{$teachers->t_phone}}" class="form-control">
            @error('t_phone')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        </div>
        <div class="col-md-4 form-group">
            <span>Address</span>
            <input type="text" name="t_address" value="{{$teachers->t_address}}" class="form-control">
            @error('t_address')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        </div>
        <div class="col-md-4 form-group">
            <span>Username</span>
            <input type="text" name="t_username" value="{{$teachers->t_username}}" class="form-control">
            @error('t_username')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Email</span>
            <input type="text" name="t_email" value="{{$teachers->t_email}}" class="form-control">
            @error('t_email')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Password</span>
            <input type="text" name="t_password" value="{{$teachers->t_password}}" class="form-control">
            @error('U_password')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Department</span>
            <select name="t_dept" onChange={handleChange} value={inputs.t_dept}>
          <option value="">Choose...</option>
          <option value="Mathematics">Mathematics</option>
          <option value="English">English</option>
          <option value="Bangla">Bangla</option>
          <option value="Chemistry">Chemistry</option>
          <option value="Physics">Physics</option>
          <option value="Biology">Biology</option>
          <option value="Religion">Religion</option>
          <option value="ICT">ICT</option>    
            @error('t_dept')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Profile Picture</span>
            <input type="text" name="t_profileimg" value="{{$teachers->t_profileimg}}" class="form-control">
            @error('t_profileimg')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <input type="submit" class="btn btn-success" value="Edit" >
    </form>
@endif
@endsection