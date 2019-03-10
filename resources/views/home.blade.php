@extends('layouts.app')
@section('content')
  <center>
  	<img style="margin-top:10%;" src="{{asset('imagenes/img-login.jpg')}}" alt="a">
  </center>
@endsection
@section('scriptJs')
  @if(session()->has('data')) 
    <script type="text/javascript"> 
      Materialize.toast("{{session('data')['mensaje']}}",3000)
    </script> 
  @endif
@endsection
