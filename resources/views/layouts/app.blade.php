<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Sistema Bodyfitness</title>
    <link rel="shortcut icon" href="{{asset('imagenes/logo.png')}}" />

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.min.css')}}"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="{{asset('css/login.css')}}"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="{{asset('css/material-design-icons.css')}}"  media="screen,projection"/>
    

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    @yield('head')
</head>

<body style="background: #ebeced;">

@guest
@yield('login') 
@else

<div class="navbar-fixed">
  <nav>
    <div class="nav-wrapper">
      <ul class="right">
        <a href="#" data-activates="slide-out" class="button-collapse  hide-on-large-only"><i class="material-icons">menu</i></a>
        <li><a class="hide-on-small-only"> {{ Auth::user()->name }}</a></li>
        <li><a href="home"><i class="material-icons">home</i></a></li>
        <li><a href="{{ route('logout') }}"><i class="material-icons">exit_to_app</i></a></li>
      </ul>
    </div>
  </nav>
</div>

<div class="row">
    <div class="col s12 m4 l3" style="">
        <ul id="slide-out" class="side-nav fixed">
            <li>
                <div class="user-view">
                    <div class="background"></div>
                </div>
            </li>
            <li>
                <div class="row no-padding">
                    <div class="col s10 push-s1">
                        <a href="home"><img src="{{asset('imagenes/logo.png')}}"  class=" responsive-img"></a>
                    </div>                      
                </div>
            </li>
            <li><div class="divider"></div></li>

            @if(Auth::user()->rol == 'M')
            <li>
                <ul class="collapsible collapsible-accordion">
                  <li>
                    <a class="waves-effect collapsible-header" href="javascript:void(0)">
                        <i class="material-icons" style="color: #5a5aa7;">mood</i>AFILIADOS
                    </a>
                    <div class="collapsible-body">
                      <ul>
                        <li><a href="{{asset('consultarAfiliado')}}" class="waves-effect">CONSULTAR</a></li>
                        <li><a href="{{asset('registrarAfiliado')}}" class="waves-effect">REGISTRAR</a></li>
                        </a></li>
                      </ul>
                    </div>
                  </li>
                </ul>
            </li>
            @endif
            
            @if(Auth::user()->rol == 'r')
                <ul class="collapsible collapsible-accordion">
                  <li>
                    <a class="waves-effect" href="{{asset('productos')}}">
                        <i class="material-icons" style="color: #5a5aa7;">free_breakfast</i>PRODUCTOS
                    </a>
                  </li>
                </ul>
            @endif
            @if(Auth::user()->rol == 'r')

                <ul class="collapsible collapsible-accordion">
                    <li>
                         <a class="waves-effect"  href="{{asset('insumos')}}">INSUMOS
                            <i class="material-icons" style="color: #e155c2;">extension</i>
                        </a>
                    </li>
                </ul>
            @endif
            
        </ul>
        
    </div>
    <div class="col s12 m12 l8 lx12"  id="contenido_principal">
        @yield('content')
    </div>
</div>

@endguest


    <script type="text/javascript" src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/js_vistas.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.validate.js')}}"></script>
    @yield('scriptJs') 

</body>
</html>