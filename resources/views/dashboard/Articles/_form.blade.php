
<div class="form-group">
    <label>Nombre articulo</label>
<input type="text" class="form-control" id="name" name="name" value="{{old('name',$article->name ?? '')}}" >
</div>
<div class="form-group">
    <label for="category_id">Categoria</label>
    <select name="category_id" class="form-control" id="category_id">
        @foreach ($categories as $category)

            <option value="{{$category->id}}">{{$category->name}}</option>
            
        @endforeach

    </select>
</div>
<div class="form-group">
    <label>Description</label>
    <textarea class="form-control" name="description" id="description" rows="3" >
        {{old('description',$article->description  ?? '')}}</textarea>  
</div>

<div class="form-group">
    <label for="review_date" class=" col-form-label text-md-right">{{ __('Fecha de revisión') }}</label>

   
        <input id="review_date" type="date" class="form-control" name="review_date" value="{{ old('review_date') }}">

    
</div>

<div class="form-group">
    <label for="status" class="col-form-label text-md-right">{{ __('Estado') }}</label>

    
        <select class="form-control" name="status" id="status">
            <option  value="Publicado">Publicado</option>
            <option value="No publicar - revision">No publicar - revision</option>
            <option value="Rechazado">Rechazado</option>
        </select>
        {{-- <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus> --}}
    
</div>
<div class="form-group">
    <label>Autor</label>
<input type="text" class="form-control" id="author" name="author" value="{{old('author',$article->author ?? '')}}" >
</div>

<div class="form-group">
    <label for="profile" class="col-form-label text-md-right">{{ __('Foto de autor') }}</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupFileAddon01">Subir</span>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input"name="imgAutor" id="imgAutor"
                aria-describedby="inputGroupFileAddon01">
                <label class="custom-file-label" for="inputGroupFile01">Seleccionar foto</label>
            </div>
        </div>
</div>
<div class="form-group">
    <label for="profile" class="col-form-label text-md-right">{{ __('Cargar PDF') }}</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupFileAddon01">Subir</span>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input"name="PDF" id="PDF"
                aria-describedby="inputGroupFileAddon01">
                <label class="custom-file-label" for="inputGroupFile01">Seleccionar PDF</label>
            </div>
        </div>
</div>

