@extends('layouts.app')
@section('content')
    <div class="back">
        <div class="container py-4">
            <div class="col-md-9 mr-auto ml-auto">
                @include('dashboard.partials.validation-error')
                <div class="card-body bg-dark card-dark">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                       {{session('status')}}
                       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                     </div>
                   @endif
                    <h4 class="card-title h2 text-center">Nuevo Articulo</h4>
                    
                    <form action="{{route('article.store')}}" method="POST" class="col-md-10 my-4 text-light mr-auto ml-auto">
                        @csrf
                        @include('dashboard.articles._form')
                        <div class="form-group py-3">
                            <button type="submit" class="btn btn-block btn-outline-light">Crear</button>
                        </div>
                    </form>
                        
                
                </div>
            </div>
        </div>
    </div>
@endsection
