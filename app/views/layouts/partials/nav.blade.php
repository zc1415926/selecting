<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="／">Selecting</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            {{ Form::open(['route' => 'signin_path', 'class' => "navbar-form navbar-right"]) }}
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
            <!--<form class="navbar-form navbar-right">
                <div class="form-group">
                    <input type="text" placeholder="Email" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Password" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Sign in</button>
            </form>-->
        </div><!--/.navbar-collapse -->
    </div>
</nav>