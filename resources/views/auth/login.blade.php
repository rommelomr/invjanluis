@extends('layouts.app')
    <link rel="shortcut icon" href="{{asset('imagenes/logo.png')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/login.css')}}">
    <div class="container">

  <div class="col s12 m7">
    <h2 class="header"></h2>
    <div class="card horizontal">
      <div class="card-image">
        <img style="margin-top:20%;" class="hide-on-small-only" src="{{asset('imagenes/img-login.jpg')}}"> 

      </div>
      <div class="card-stacked">
        <div class="card-header titulo-login">SISADGYM</div>
        <div class="card-content"><br><br><br>
          <form class="col s12 " method="POST" action="{{ route('login') }}"> @csrf
            @if ($mensaje)
              {{$mensaje}}
            @endif

            @if(session()->has('data')) {{session('data')['mensaje']}} @endif

            @foreach ( $errors->all() as $error)
             <span class="invalid-feedback">
                  <strong>{{$error}}</strong>
              </span>

            @endforeach
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">email</i>
                
                <input id="icon_prefix email" type="email" class="validate {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                
                <label for="icon_prefix">Correo</label>
                
                @if ($errors->has('email'))
                  <span class="invalid-feedback">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
                @endif
              </div>

              <div class="input-field col s12">
                <i class="material-icons prefix">vpn_key</i>

                <input id="icon_telephone password" type="password" name="password"  class="validate {{ $errors->has('password') ? ' is-invalid' : '' }}" required>

                <label for="password">Contraseña</label>
                
                @if ($errors->has('password'))
                  <span class="invalid-feedback">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
                @endif
              </div>

                 <center>
                    <button type="submit" class="btn waves-effect waves-light btn-entrar" aling="center">
                       Entrar<i class="material-icons right">send</i>
                    </button>
                 </center>
            </div>
            <div class="card-action">
              <center>
                 <a class="waves-effect waves-light modal-trigger" href="#modal1">
                   Recuperar Contraseña
                 </a>
              </center>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<footer class="page-footer teal lighten-2 no-padding hide-on-small-only">
    <div class="footer-copyright ">
      <div class="container">
      © 2018 Copyright
      <a class="grey-text text-lighten-2 right" href="https://www.google.com/maps/place/Body+Fitness+Gym/@10.3456295,-67.0457032,17z/data=!3m1!4b1!4m5!3m4!1s0x8c2a8cf8d8acd6f9:0x40a983fd3f5ecdeb!8m2!3d10.3456295!4d-67.0435145" target="_blank" >Ubicacion</a>
      </div>
    </div>
</footer>


<!-- _____________________MODAL___________________ -->
          <div id="modal1" class="modal bottom-sheet">
            <div class="modal-content  teal lighten-3">
              <a href="#!" class="modal-action modal-close right ">
                <i class="material-icons " style="color:black;">close</i>
              </a>
              <h5 class="white-text text-white">{{ __('Recuperar Contraseña') }}</h5>
            </div><br>
              <div class="row">
                <form method="POST" class="" action="recuperarContraseña">
                 @csrf 
                 <center>  
                    <div class="input-field col s6  offset-s3">
                       <i class="material-icons prefix">email</i>
                        <label for="email " class="validate">{{ __('Correo') }}</label>

                        <input id="email " type="email" class="validate{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('Correo') }}</strong>
                            </span>
                        @endif
                    </div>
                  </center>
                  <div class="modal-footer">
                    @if (session('status'))
                      <div class="alert alert-success">
                          {{ session('status') }}
                      </div>
                    @endif                                          
                  </div>
                  <center>
                    <div class="row">
                      <div class="col s5  offset-s3">
                        <center>
                          
                          <button type="submit" class="btn btn-primary">
                              {{ __('enviar') }}
                          </button>
                          <a href="#!" class="secondary-content waves-effect btn modal-close" style="margin-right: 2%;" onclick="instance.close();">cancelar</a>
                        </center>
                      </div>
                    </div>
                  </center>
                </form>
              </div>
          </div>
<!-- _____________________MODAL___________________ -->