@extends('layouts.admin')
    @section('content')
        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
                <ul class="nav nav-sidebar">
                    <li class="active"><a href="#">管理首页<span class="sr-only">(current)</span></a></li>
                </ul>
                <ul class="nav nav-sidebar">
                    <li><a href="#">课程管理</a></li>
                    <li><a href="#">浏览课程</a></li>
                    <li><a href="#">添加课程</a></li>
                </ul>
                <ul class="nav nav-sidebar">
                    <li><a href="">学生管理</a></li>
                    <li><a href="">浏览学生</a></li>
                    <li><a href="">添加课程</a></li>
                </ul>
                <ul class="nav nav-sidebar">
                    <li><a href="">选课管理</a></li>
                    <li><a href="">浏览选课</a></li>
                    <li><a href="">添加选课</a></li>
                </ul>
            </div>

            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <h1>你好，管理员： {{ $currentUser->username }}</h1>
            </div>
        </div>

    @endsection
@stop