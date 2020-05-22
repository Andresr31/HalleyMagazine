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
                    <h4 class="card-title h2 text-center">Editar Post</h4>
                    
                    <form action="{{route('post.update',$post)}}" method="POST" class="col-md-10 my-4 text-light mr-auto ml-auto">
                        @csrf
                        @method('PUT')
                        @include('dashboard.post._form')
                        <div class="form-group py-3">
                            <button type="submit" class="btn btn-block btn-outline-light">Actualizar</button>
                            <div class="form-group">
                                <a href="{{route('post.index')}}" class="btn btn-block mr-auto ml-auto btn-outline-light mt-3"> Volver</a>
                                    
                                </div>
                        </div>
                    </form>
                    
                
                </div>
            </div>
        </div>
    </div>
@endsection
