@extends('layouts.applte')

@section('contenido')
<a href="{{route('computadora.crear')}}" class="btn btn-success">Registrar Computadora</a>
<a href="{{route('home')}}" class="btn btn-danger">Volver al inicio</a>
<br/>
<br/>
<br/>
@include('includes.alertaeditaryborrarcompu')
@include('includes.alertacomputadoraindex')
@endsection
