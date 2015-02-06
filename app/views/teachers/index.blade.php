@extends('layouts.admin_profile')
@section('content')
    <h1>在这里浏览所有的教师</h1>
    <h3>总教师数： {{ count($teachers) }}</h3>
    <hr>
    <table class="table">
        <thead><tr><th>#</th><th>教师姓名</th><th>教师简介</th></tr></thead>
        <tbody>

        @foreach($teachers as $teacher)
            <tr><td>{{ $sequence++ }}</td>
                <td>{{ $teacher->teachername }}</td>
                <td>{{$teacher->description}}</td>
            </tr>

        @endforeach

        </tbody>
    </table>
@endsection
@stop