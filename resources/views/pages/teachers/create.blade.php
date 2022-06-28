@extends('layouts.app')
@section('content')
    <form action="{{route('teacher.create')}}" class="col-md-6" method="post">
        <!-- Cross Site Request Forgery-->
        <h1>Create Your Account</h1>
        {{csrf_field()}}
        
        <div class="col-md-4 form-group">
            <span>Name</span>
            <input type="text" name="t_name" value="{{old('t_name')}}" class="form-control">
            @error('t_name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
            <span>Phone</span>
            <input type="text" name="t_phone" value="{{old('t_phone')}}" class="form-control">
            @error('t_phone')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div>
            <span>Address</span>
            <input type="text" name="t_address" value="{{old('t_address')}}" class="form-control">
            @error('t_address')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div>
            <span>Username</span>
            <input type="text" name="t_username" value="{{old('t_username')}}" class="form-control">
            @error('t_username')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div>
            <span>Email</span>
            <input type="email" name="t_email" value="{{old('t_email')}}" class="form-control">
            @error('t_email')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        </div>
            <span>Password</span>
            <input type="password" name="t_password" value="{{old('t_password')}}" class="form-control">
            @error('t_password')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div>
      
          <span>Department</span>
          <select name="t_dept" onChange={handleChange} value={inputs.t_dept} class="form-control">
          <option value="">Choose...</option>
          <option value="Mathematics">Mathematics</option>
          <option value="English">English</option>
          <option value="Bangla">Bangla</option>
          <option value="Chemistry">Chemistry</option>
          <option value="Physics">Physics</option>
          <option value="Biology">Biology</option>
          <option value="Religion">Religion</option>
          <option value="ICT">ICT</option>    
               
</select>
            @error('t_dept')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div >
      
      <span>Profile Picture</span>
      <input type="hidden" name="t_profileimg" value="t_profileimg" class="form-control">
      @error('t_profileimg')
          <span class="text-danger">{{$message}}</span>
      @enderror
  </div>
        <input type="submit" class="btn btn-success" value="Sign Up" >
    </form>
@endsection