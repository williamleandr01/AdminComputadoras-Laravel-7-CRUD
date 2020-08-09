@extends('layouts.applte')

@section('contenido')
<div class="row">
    <div class="col-md-10">
        @include('includes.alertaerrorformcomputadora')
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Editar Computadora # {{$computadora[0]->id_computadora}}</h3>
            </div>
            <form method="POST" action="{{route('computadora.actualizar', $computadora[0]->id_computadora)}}" name="formcompucrear" id="formcompucrear" role="form" enctype="multipart/form-data">
                @csrf
                @method('PUT')
               <div class="card-body">
                   @include('includes.formeditcomputadora')
               </div>
               <div class="card-footer">
                   @include('includes.botoneditarcompu')
               </div>
            </form>
        </div>
    </div>
</div>
@endsection
