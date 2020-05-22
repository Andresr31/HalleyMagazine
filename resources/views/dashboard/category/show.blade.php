@extends('layouts.app')
@section('content')
    <div class="back">
        <div class="container py-4">
            <div class="col-md-9 mr-auto ml-auto">
                <div class="card-body bg-dark card-dark">
                    <h4 class="card-title h2 text-center">Categoria</h4>
                        <div class="col-md-10 my-4 text-light mr-auto ml-auto">
                            <div class="form-group">
                                <label>Nombre</label>
                            <input readonly type="text" class="form-control" id="titulo" name="title" value="{{$category->name}}" >
                            </div>
                            <div class="form-group">
                                <label>Descripcion</label>
                                <input readonly type="text" class="form-control" id="url" name="url_clean" value="{{$category->description}}" >
                            </div>
                            <div class="form-group">
                            <a href="{{route('category.index')}}" class="btn btn-block mr-auto ml-auto btn-outline-light mt-3"> Volver</a>
                                
                            </div>
                        </div>
                        
                
                </div>
            </div>
        </div>
    </div>
@endsection
