@extends('layouts.app')
@section('content')
@if(Session::get('teacher_id'))
    <table class="table table-borded">
        <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>Address</th>
            <th>User Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Department</th>
            <th>Profile Picture</th>
            <th></th>
            <th></th>
        </tr>
        @foreach($teachers as $teacher)
            <tr>
                <td>{{$teacher->t_name}}</td>
                <td>{{$teacher->t_phone}}</td>
                <td>{{$teacher->t_address}}</td>
                <td>{{$teacher->t_username}}</td>
                <td>{{$teacher->t_email}}</td>
                <td>{{$teacher->t_password}}</td>
                <td>{{$teacher->t_dept}}</td>
                <td>{{$teacher->t_profileimg}}</td>
                <td><a href="/teacher/edit/{{$teacher->id}}/{{$teacher->t_name}}" class="btn btn-warning">Edit</a></td>
            </tr>
        @endforeach
    </table>
@endif
@endsection