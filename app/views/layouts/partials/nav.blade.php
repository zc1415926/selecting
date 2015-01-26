<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('home')}}">Selecting</a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
            @if( ! $currentUser )
                {{ Form::open(['route' => 'login_path', 'class' => "navbar-form navbar-right"]) }}
                <div class="form-group">
                    {{ Form::text('quick_username', '', ['class' => 'form-control', 'placeholder' => 'username', 'required' => 'required']) }}
                </div>
                <div class="form-group">
                    {{ Form::password('quick_password', ['class' => 'form-control', 'placeholder' => 'password', 'required' => 'required']) }}
                </div>
                <div class="form-group">
                    {{ Form::submit('登 录', ['class' => 'btn btn-success']) }}
                </div>
                {{ Form::close() }}
            @else
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{$currentUser->username}}<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li>{{ link_to_route('profile_path', '个人主页') }}</li>
                            <li class="divider"></li>
                            <li>{{ link_to_route('logout_path', '退出登录') }}</li>
                        </ul>
                    </li>
                </ul>
            @endif
        </div><!--/.navbar-collapse -->
    </div>
</nav>