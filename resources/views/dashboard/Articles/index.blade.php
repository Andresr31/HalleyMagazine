@extends('layouts.app')
@section('content')

<div class="back">
    <div class="container py-4">
        <div class="card bg-dark col-md-9 mr-auto ml-auto">
            @if (session('status'))
            <div class="alert alert-success my-2" role="alert">
               {{session('status')}}
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
             </div>
           @endif
            <h4 class="card-title h2 text-center py-3">Articulos</h4>
            @auth
            <div class="row col-md-9 mr-auto ml-auto">
                <div class="col">
                    <a href="{{ route('article.create') }}"
                        class="btn btn-outline-light btn-block">{{ __('Crear') }}</a>
                </div>
            </div>
            @endauth
                <div class="table-responsive col-md-10 mr-auto ml-auto py-3">
                    <table class="table table-light ">
                        <thead class="thead-dark text-light">
                            <th>
                                {{ __('Id') }}
                            </th>
                            <th>
                                {{ __('Nombre') }}
                            </th>
                            <th>
                                {{ __('Estado') }}
                            </th>
                            <th>
                                {{ __('Creación') }}
                            </th>
                            <th>
                                {{ __('Actualización') }}
                            </th>
                            @auth
                                <th >
                                    {{ __('Acciones') }}
                                </th>
                            @endauth
                            
                        </thead>
                        <tbody>
                            @foreach($articles as $article)
                                <tr>
                                    <td>
                                        {{$article->id}}
                                    </td>
                                    <td>
                                        {{$article->name}}
                                    </td>
                                    <td>
                                        {{$article->status}}
                                    </td>
                                    <td>
                                        {{$article->created_at->format('d-m-Y')}}
                                    </td>
                                    <td>
                                        {{$article->updated_at->format('d-m-Y')}}
                                    </td>

                                    @auth
                                    <td >

                                        <a href="{{ route('article.show',$article->id) }}"  data-original-title="" title=""><i class="fas fa-eye icon"></i></a> | <a href="{{ route('article.edit',$article) }}"  data-original-title="" title=""><i class="fas fa-edit icon"></i></a> |<button class="btn btn-link btn-sm" type="button" data-toggle="modal" data-target="#eliminarModal"  data-id="{{$article->id}}"><i class="fas fa-trash-alt icon"></i></button>

                                    
                                    </td>
                                    @endauth
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$articles->links()}}
                </div>
            
            
            </div>
        </div>
    </div>
</div>

<div id="eliminarModal"class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Eliminar Articulo</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <p>¿Seguro que desea eliminar el articulo seleccionado?</p>
        </div>
        <div class="modal-footer">                                    
            <form id="formDelete" action="{{route('article.destroy',0)}}" data-action="{{route('article.destroy',0)}}" method="POST">
                @csrf
                @method('DELETE')
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
        </div>
        </div>
    </div>
</div>
<script>
    $('#eliminarModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var id = button.data('id') 
      action=$('#formDelete').attr('data-action').slice(0,-1);
      var modal = $(this)
      $('#formDelete').attr('action',action+id);
      modal.find('.modal-title').text('Vas a eliminar el Articulo: ' + id)
  })
</script>

@endsection