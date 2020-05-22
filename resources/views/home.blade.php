@extends('layouts.app')

@section('content')
<div class="back">
    
    <div class="container py-4 ml-auto mr-auto">
        <div class="row py-4">
            
            <img class="img-fluid img-thumbnail rounded ml-auto my-4" style="width: 100px; height: 100px;" src="{{Auth::user()->url_profile}}" alt="">
        </div>
        <div class="row">
            <div class="col-sm-6">
            <div class="card card-dark bg-dark text-light">
                <div class="card-body">
                <h4 class="card-title text-center h2">Articulos</h4>
                <p class="card-text text-center">Gestiona articulos</p>
                <a href="{{route('article.index')}}" class="btn btn-outline-secondary btn-block">Ver</a>
                </div>
            </div>
            </div>
            <div class="col-sm-6">
            <div class="card card-dark bg-dark text-light">
                <div class="card-body">
                <h4 class="card-title text-center h2">Categorias</h4>
                <p class="card-text text-center">Gestiona categorias</p>
                <a href="{{route('category.index')}}" class="btn btn-outline-secondary btn-block">Ver</a>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
