@extends('layouts.admin_profile')
    @section('content')
        <h1>你好，管理员： {{ $currentUser->username }}</h1>
    @endsection
@stop