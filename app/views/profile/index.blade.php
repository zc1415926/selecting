@extends('layouts.admin')
    @section('content')
        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
                <ul class="nav nav-sidebar">
                    <li class="active"><a href="#">个人首页<span class="sr-only">(current)</span></a></li>
                </ul>
                <ul class="nav nav-sidebar">
                    <li><a href="">我的选课</a></li>
                    <li><a href="">已选课程</a></li>
                </ul>
                <ul class="nav nav-sidebar">
                    <li><a href="">个人设置</a></li>
                    <li><a href="">我的资料</a></li>
                </ul>
            </div>

            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <h1>你好，庶民： {{ $currentUser->username }}</h1>
            </div>
        </div>
    @endsection
@stop