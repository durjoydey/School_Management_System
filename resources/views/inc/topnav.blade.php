<div align="center">
<a class="btn btn-danger" href="{{route('home')}}"> Home </a>
<a class="btn btn-primary" href="{{route('teacher.create')}}"> Create Account </a>
@if(Session::get('teacher_id'))
<a class="btn btn-primary" href="{{route('teacher.list')}}"> Teachers list </a>
<a class="btn btn-danger" href="{{route('logout')}}">Logout </a>
@else
<a class="btn btn-success" href="{{route('login')}}"> Login </a>
@endif
</div>
