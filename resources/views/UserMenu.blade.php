<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>EasyExange</title>
        <link rel="stylesheet" href={{ asset('vendor/bootstrap/css/bootstrap.min.css') }} > 
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
    <nav class="navbar navbar-default" role="navigation">
      <div class="container">
      <ul class="nav navbar-nav">
      @if (Auth::guest())
        <li align="center"><a href=""><img src="anonimous.png" class="center-block"></a></li>
        <li><a href="" class="center"><H3>Ananimous</H2></a></li>
        <li><a href=""><span class="glyphicon glyphicon-home" aria-hidden="false"></span></a></li>
        <li><a target="_top"" href="{{ route('login') }}"><span class="glyphicon glyphicon-list" aria-hidden="false"></span> Login</a></li>
        <li><a target="_top" href="{{ route('register') }}"><span class="glyphicon glyphicon-stats" aria-hidden="false"></span> SigIn</a></li>

      @else 
        <li align="center"><a href=""><img src="anonimous.png" class="center-block"></a></li>
        <li><a href="" class="center"><H2>UserName</H2></a></li>
        <li><a href=""><span class="glyphicon glyphicon-home" aria-hidden="false"></span></a></li>
        <li><a href=""><span class="glyphicon glyphicon-list" aria-hidden="false"></span> Ссылки</a></li>
        <li><a href=""><span class="glyphicon glyphicon-stats" aria-hidden="false"></span> Черный Список</a></li>
        <li><a href=""><span class="glyphicon glyphicon-user" aria-hidden="false"></span> Список Друзей </a></li>
        <li><a href="logout" onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="logout" method="POST" target="_top" style="display: none;">
                                            {{ csrf_field() }}
                                        </form></li>
        Main Meny for user.
      @endif 
      </ul>
      </div>
    </nav>
       <!-- Scripts -->
     	<script type="text/javascript" src={{ asset('vendor/components/jquery/jquery.min.js') }}></script>
     	<script type="text/javascript" src={{ asset('vendor/bootstrap/js/bootstrap.min.js') }}></script>
    </body>
</html>