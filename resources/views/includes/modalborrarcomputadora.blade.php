
  <!-- Modal -->
  <div class="modal fade" id="borrarcompumodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="{{route('computadora.eliminar', $tf=0)}}">
            @csrf
            @method('DELETE')
              <div>
                  <input type="text" class="form-control"  id="idbcompu">
              </div>
              <div>
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </div>
          </form>
        </div>
        <div class="modal-footer">
            <div>
                <button type="button" class="btn btn-info" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
      </div>
    </div>
  </div>
