<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proflot</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/menu.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    </head>
    <body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">[ PROFLOT ]</a>
            </div>

            
        </div>
    </nav>

        <nav class="navbar navbar-m2p sidebar" role="navigation">
         <div class="container-fluid">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <div class="navbar">
                    <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-education"></span>
                        System<b>Proflot</b>
                    </a>
                    


                </div>
            </div>
            <!-- Brand and toggle get grouped for better mobile display -->
            
            <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <!-- Dashboard -->
                    <li class="active open">
                      <a href="">
                          <span class="pull-right hidden-xs showopacity glyphicon material-icons">av_timer</span>Painel
                      </a>
                  </li>
                  <!-- Banner -->
                  
                <li class="">
                    <a href="#">
                        <span class="menu-icon pull-right hidden-xs showopacity glyphicon material-icons" style="font-size:36px">recent_actors</span>Professor
                    </a>

                </li>
                <li class="">
                    <a href="{{Route('admin.disciplinas.index')}}">
                        <span class="menu-icon pull-right hidden-xs showopacity glyphicon material-icons" style="font-size:36px">list</span>Disciplinas
                    </a>

                </li>
                <li class="">
                    <a href="#">
                        <span class="menu-icon pull-right hidden-xs showopacity glyphicon material-icons" style="font-size:36px">perm_media</span>Relatorios
                    </a>

                </li><li class="">
                <a href="{{Route('admin.salas.index')}}">
                    <span class="menu-icon pull-right hidden-xs showopacity glyphicon material-icons" style="font-size:36px">view_quilt</span>Salas
                </a>

            </li>
            <li class="">
                <a href="{{route('admin.turmas.index')}}">
                    <span class="menu-icon pull-right hidden-xs showopacity glyphicon material-icons" style="font-size:36px">dialpad</span>Lotação
                </a>

            </li>
            <li class="">
                <a href="#">
                    <span class="menu-icon pull-right hidden-xs showopacity glyphicon material-icons" style="font-size:36px">device_hub</span>Solicitação
                </a>

            </li>
            <li class="separator">System</li>
            <!-- Exit -->
            <li class="">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <span class="menu-icon pull-right hidden-xs showopacity glyphicon material-icons" style="font-size:36px">subject</span>Usuario<span class="caret"></span>
            </a>
            <ul class="dropdown-menu forAnimate" role="menu">
                <li><a href="{{Route('admin.users.create')}}"><i class="material-icons">add</i>Usuario</a></li>
                <li><a href="{{Route('admin.users.index')}}"><i class="material-icons">add</i> Todos</a></li>

            </ul>
        </li>

        <li>
            <li class="">

                    
                        <li class="">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> Bem Vindo {!! Auth::user()->name !!} <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="/logout">Logout</a></li>
                            </ul>
                        </li>
                 
                </ul>
                

            </li>

            </div>
        </div>
    </nav>
            </li>
        </ul>
    </div>
</div>
</nav>
@yield('content')

<!-- Scripts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript">

function htmlbodyHeightUpdate() {
    var height3 = $(window).height();
    var height1 = $('.nav').height() + 70;
    height2 = $('.container-main').height();
    if (height2 > height3) {
        $('html').height(Math.max(height1, height3, height2) + 50);
        $('body').height(Math.max(height1, height3, height2) + 50);
    } else
    {
        $('html').height(Math.max(height1, height3, height2));
        $('body').height(Math.max(height1, height3, height2));
    }

}
$(document).ready(function () {
    htmlbodyHeightUpdate();
    $(window).resize(function () {
        htmlbodyHeightUpdate();
    });
    $(window).scroll(function () {
        height2 = $('.container-main').height();
        htmlbodyHeightUpdate();
    });
});

</body>
</html>

