@if (!$computadora->count())
    <div class="alert alert-info alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fas fa-ban"></i>No hay computadoras registradas</h5>
    </div>
@else
@include('includes.consultcomputadora')
@endif

