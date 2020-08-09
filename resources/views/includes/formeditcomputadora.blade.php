<div class="form-group" style="display: none">
    <label for="exampleInputId1"></label>
<input name="id_computadora" type="text" class="form-control" id="id_computadora">
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
<input name="nombre_computadora" type="text" class="form-control" id="nombre_computadora" placeholder="Nombre"  value="{{$computadora[0]->nombre_computadora}}">
</div>
<div class="form-group">
    <label for="exampleInputPassword1">Precio $</label>
    <input name="precio_compu" type="text" class="form-control" id="precio_compu" step="any" placeholder="$" value="{{$computadora[0]->precio_compu}}">
</div>
<div class="form-group">
    <label for="exampleInputFile">Imagen</label>
    <div class="input-group">
    <div class="custom-file">
        <input name="img_compu" type="file"
         class="form-control" id="img_compu">
    </div>
    </div>
</div>

<div>
    <img src="{{ asset('storage').'/'.$computadora[0]->img_compu}}" alt="" width="200">
</div>

<div class="">
    <label for="exampleInputPassword1">Descripción</label>
    <textarea name="descrip_compu" id="descrip_compu"
     class="form-control" rows="3" placeholder="Escriba aquí...">{{$computadora[0]->descrip_compu}}</textarea>
</div>

