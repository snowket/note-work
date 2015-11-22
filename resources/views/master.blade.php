<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    {!! Helpers::css() !!}
    {!! Helpers::js() !!}
    <title>
        @if(Auth::check())
            {!! Auth::user()->username !!}
            @else
            {!! "Not Loged In yet ! ! ! " !!}
        @endif
    </title>

</head>
<body>
<nav class="navbar navbar-default">
    <div class="container">
         <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a style = "float:left" class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-home"></span > Home Page</a>
         </div>
        <div class="navbar-collapse collapse">

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/users">ინფო</a></li>
                    <li><a href="/pupils">Pupils</a></li>
                    <li><a href="/teachers">Teachers</a></li>
                    <li ><a href="/classes">Classes</a></li>
                    <li><a href="/marks">Marks </a></li>             <!-- ??????????  - evaluate -->
                    <li><a href="/subjects">Subjects</a></li>
                    @if(Auth::check())
                    <li><a href="{!! "persons/". Auth()->User()->id !!} ">Profile</a></li>
                    <li>
                        <a href="/auth/logout">Logout</a>
                    </li>
                        @else
                        <li><a href="/auth/login">Log In</a></li>
                        @endif

                </ul>

        </div>
    </div>
</nav>

    <div class="col-md-4">
          @yield('article')
    </div>
</div>



</body>
</>