<!DOCTYPE html>
<html lang="en">
<head>
  <title>Employee</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<script>
$("document").ready(function(){
    setTimeout(function() {
        $('#message').fadeOut('fast');
},  3000); 
});
</script>
<body>

<div class="container">

    <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                <a class="navbar-brand" href="#">佈告欄</a>
                </div>
                <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                {{-- <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> --}}

                @if (Session::has('userName'))
                <li><a href="/user/logout"><span class="glyphicon glyphicon-log-out"></span>登出</a></li>
                @else
                <li><a href="/user/login"><span class="glyphicon glyphicon-log-in"></span>登入</a></li>
                @endif

                </ul>
            </div>
    </nav>
  
    @if (Session::has('flash_success_message'))
    <div id="message" class="alert alert-success">{{ Session::get('flash_success_message') }}</div>
    @endif
  
    @if (Session::has('flash_error_message'))
        <div id="message" class="alert alert-danger">{{ Session::get('flash_error_message') }}</div>
    @endif

  @yield('content')
</div>

</body>
</html>