@extends('layouts.admin_profile')
@section('content')
    <h1>在这里浏览所有的教师</h1>
    <hr>
    <h3>总教师数： {{ count($teachers) }}</h3>
    <ul>
        @foreach($teachers as $teacher)
            <li>{{ $teacher->teachername }} | {{$teacher->description}}</li>
        @endforeach
    </ul>
@endsection
@stop