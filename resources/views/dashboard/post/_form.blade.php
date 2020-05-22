
<div class="form-group">
    <label>Titulo</label>
<input type="text" class="form-control" id="titulo" name="title" value="{{old('title',$post->title ?? '')}}" >
</div>
<div class="form-group">
    <label>Url</label>
    <input type="text" class="form-control" id="url" name="url_clean" value="{{old('url_clean',$post->url_clean ?? '')}}" >

</div>
<div class="form-group">
    <label for="category_id">Categoria</label>
    <select name="category_id" class="form-control" id="category_id">
        @foreach ($categories as $category)

            <option value="{{$category->id}}">{{$category->title}}</option>
            
        @endforeach

    </select>
</div>

<div class="form-group text-dark">     
    <label for="contenido" class="text-light">Contenido</label>     
    <textarea class="form-control" name="content" id="contenido" rows="3" >
        {{old('content',$post->content  ?? '')}}</textarea>     
        @error('content')         
            <small class="text-danger">{{$message}}</small>
        @enderror 
</div>
