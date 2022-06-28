@extends('layouts.app')
@section('content')
<form action="{{route('login')}}" method="post">
	
	{{@csrf_field()}}<br>

	<div align="center">
            <span>Username</span>
            <input type="text" name="t_username" value="{{old('t_username')}}">
            @error('t_username')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div><br>

		<div align="center">
            <span>Password</span>
            <input type="password" name="t_password" value="{{old('t_password')}}">
            @error('t_password')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div><br>
        <div align="center">
	<input type="submit" name="login" align="center" value="Login" class="btn btn-success">
    </div>
    <div align="center"><a href="/teacher/create/">Don't have an account?<br>Sign up now</a>
</div>
</form>
@endsection