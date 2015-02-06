@@extends('layouts.admin_profile')
@section('content')
    <h2>添加教师</h2>

    @if($errors->any())
        <div class="alert alert-danger">
            <h3>哦嚯！</h3>
            <ul>

                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{ Form::open(['route' => 'addteacher_path']) }}

    <div class="form-group">
        {{ Form::label('teachername', '教师姓名：') }}
        {{ Form::text('teachername', null, ['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('description', '教师简介：') }}
        {{ Form::textarea('description', null, ['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::submit('确认添加', ['class' =>'btn btn-primary']) }}
    </div>
    {{ Form::close() }}

@stop