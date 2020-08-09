@extends('layouts.applte')

@section('contenido')
<div class="row">
    <div class="col-md-10">
        @include('includes.alertaerrorformcomputadora')
        @include('includes.alertacorrectoformcomputadora')
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Registrar Computadora</h3>
            </div>
             <form method="POST" action="{{route('computadora.guardar')}}" name="formcompucrear" id="formcompucrear" role="form" enctype="multipart/form-data">
                 @csrf
                <div class="card-body">
                    @include('includes.formregcomputadoras')
                </div>
                <div class="card-footer">
                    @include('includes.botoncrearcompu')
                </div>
             </form>
        </div>
    </div>
</div>
@endsection
