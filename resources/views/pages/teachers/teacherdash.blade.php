<div align="center"><h3>Welcome  {{Session::get('teacher_name')}}. Select Your Options from here! </h3> </div>
@extends('layouts.app')
@section('content')

@if(Session::get('teacher_id')) 


@endif

@endsection