@extends('layouts.admin_profile')
@section('content')
    <h1>在这里浏览所有的学生</h1>
    <hr>
    <h3>总学生数： {{ count($students) }}</h3>
    <ul>
        @foreach($students as $student)
            <li>{{ $student->username }} | {{$student->showname}}</li>
        @endforeach
    </ul>
@endsection
@stop