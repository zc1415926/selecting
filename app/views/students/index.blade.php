@extends('layouts.admin_profile')
@section('content')
    <h1>在这里浏览所有的学生</h1>
    <h3>总学生数： {{ count($students) }}</h3>
    <hr>
    <table class="table">
        <thead><tr><th>#</th><th>用户名</th><th>显示名</th></tr></thead>
        <tbody>
        @foreach($students as $student)
            <tr><td>{{ $sequence++ }}</td>
                <td>{{ $student->username }}</td>
                <td>{{$student->showname}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
@stop