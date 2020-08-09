<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
                    <div class="card-blue">
                        <div class="card-header">
                        <h3 class="card-title">Computadoras Registradas</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Imagen</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Nombre</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Precio</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Descripción</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($computadora as $compu)
                                                <tr>
                                                    <td>
                                                        # {{$compu->id_computadora}}
                                                        <img src="{{ asset('storage').'/'.$compu->img_compu}}" alt="" width="150">
                                                    </td>
                                                    <td>{{$compu->nombre_computadora}}</td>
                                                    <td>{{$compu->precio_compu}}</td>
                                                    <td>{{$compu->descrip_compu}}</td>
                                                    <td>

                                                        <form method="POST" action="{{route('computadora.editar', $compu->id_computadora)}}">
                                                            @csrf
                                                            @method('PUT')
                                                            <div>
                                                                <button type="submit" class="btn btn-warning btn-sm">Editar</button>
                                                            </div>
                                                        </form>


                                                        <form method="POST" action="{{route('computadora.eliminar', $compu->id_computadora)}}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <div>
                                                                <button type="submit" class="btn btn-danger btn-sm"
                                                                    onclick="return confirm('¿ Desea eliminar la computadora # ' + {{$compu->id_computadora}} + ' ?')">Eliminar</button>
                                                            </div>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                        <!-- /.card-body -->
                </div>
          <!-- /.card -->
            </div>
        <!-- /.col -->
        </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
