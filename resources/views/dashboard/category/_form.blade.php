<div class="form-group">
    <label>Titulo</label>
<input type="text" class="form-control" id="titulo" name="title" value="{{old('title',$category->title ?? '')}}" >
</div>
<div class="form-group">
    <label>Url</label>
    <input type="text" class="form-control" id="url" name="url_clean" value="{{old('url_clean',$category->url_clean ?? '')}}" >

</div>


