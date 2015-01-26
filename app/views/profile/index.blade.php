@extends('layouts.default')
    @section('content')
        <div class="container">

        <h1>你好， {{ $currentUser->username }}</h1>
        @if($currentUser->role == 0)
            @include('profile.partials.admin')
        @else
            @include('profile.partials.ordinary')
        @endif
        </div>
    @endsection
@stop