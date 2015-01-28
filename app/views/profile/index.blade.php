@extends('layouts.profile')
@section('content')
    <h1>你好，庶民： {{ $currentUser->username }}</h1>
@endsection
@stop