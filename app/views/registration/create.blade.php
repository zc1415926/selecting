@@extends('layouts.admin_profile')
@section('content')
        <h2>添加学生</h2>

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
        {{ Form::open(['route' => 'register_path']) }}

        <div class="form-group">
            {{ Form::label('username', '用户名：') }}
            {{ Form::text('username', null, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('showname', '昵称：') }}
            {{ Form::text('showname', null, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::submit('完成注册', ['class' =>'btn btn-primary']) }}
        </div>
        {{ Form::close() }}

@stop