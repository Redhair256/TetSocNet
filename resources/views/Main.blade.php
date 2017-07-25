<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>EasyExange</title>
    <link rel="stylesheet" href={{ asset('vendor/bootstrap/css/bootstrap.min.css') }} > 
    </head>
    <body bgcolor=00FFFF>
    <nav class="navbar navbar-default" role="navigation">
      <div class="container">
      <ul class="nav navbar-nav">
        <li><a href=""><span class="glyphicon glyphicon-home" aria-hidden="false"></span></a></li>
        <li><a href=""><span class="glyphicon glyphicon-list" aria-hidden="false"></span> Ссылки</a></li>
        <li><a href=""><span class="glyphicon glyphicon-stats" aria-hidden="false"></span> Личное</a></li>
        <li><a href=""><span class="glyphicon glyphicon-user" aria-hidden="false"></span> Список друзей </a></li>
        <li><div class="form-group">
          <input type="text" class="form-control bottom-block" placeholder="Search">
        </div></li>
        <li><button type="submit" class="btn btn-default center-block">Submit</button></li>
        </li>
        </ul>
      </div>
    </nav>
    main frame
       <!-- Scripts -->
     	<script type="text/javascript" src={{ asset('vendor/components/jquery/jquery.min.js') }}></script>
     	<script type="text/javascript" src={{ asset('vendor/bootstrap/js/bootstrap.min.js') }}></script>
     </body>
</html>