@extends('layouts.default')
    @section('content')
        @if($currentUser)
        {{ $currentUser->username }}
    @endsection
@stop