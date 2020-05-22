<div class="form-group">
    <label>Nombre</label>
<input type="text" class="form-control" id="titulo" name="name" value="{{old('name',$category->name ?? '')}}" >
</div>
<div class="form-group">
    <label>Descripción</label>
    <input type="text" class="form-control" id="url" name="description" value="{{old('description',$category->description ?? '')}}" >

</div>


