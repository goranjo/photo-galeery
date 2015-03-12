<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title> Albums</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">



  <style>
  body {
    padding-top: 50px;
  }
  .starter-template {
    padding: 40px 15px;
    text-align: center;
  }
  </style>
</head>
<body>
  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{URL::route('index')}}"> Albums</a>
      <div class="nav-collapse ">
        <ul class="nav navbar-nav">
          <li><a href="{{URL::route('index')}}">Create New Album</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>


    @yield('content')

     <!-- Latest compiled and minified JavaScript -->
  <script href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  </body>
  </html>