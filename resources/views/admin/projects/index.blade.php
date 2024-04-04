@extends('layouts.app')
@section('content')

<div class="container">
    <a href="{{route('admin.projects.create')}}" class="btn btn-primary my -4" > <i class="fa-solid fa-plus"></i>Nuovo post</a>
<h1>Lista projects</h1>

<table class="table">

<thead>
<tr>
    <th>titolo</th>
    <th>slug</th>
    <th>estratto</th>
</tr>
</thead>
<tbody>
@forelse($projects as $project)

<tr>
    <td>{{$project->title}}</td>
    <td>{{$project->slug}}</td>
    <td>{{$project->getAbstract(50)}}</td>
   
    <td><a href="{{route('admin.projects.show', $project)}}" class="btn btn-info" > <i class="fa-solid fa-eye"></i></a></td>
    <td><a href="{{route('admin.projects.edit', $project)}}" class="btn btn-primary" > <i class="fa-solid fa-pencil"></i></a></td>
    <td><a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete-post-{{$project->id}}-modal"><i class="fa-solid fa-trash"></i></a></td>
    
</tr>
@empty
<tr>
    <td colspan="100%">
        <i>nessun risultato</i>
    </td>
</tr>

@endforelse

</tbody>


</table>

{{$projects->links('pagination::bootstrap-5')}}


</div>
@endsection


@section('modal')
@foreach($projects as $project)
<div class="modal fade" id="delete-post-{{$project->id}}-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Stai eliminando il post "{{$project->title}}". L'operazione non e' reversibile.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>

        <form action="{{route('admin.projects.destroy', $project)}}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger">Elimina</button>
    
         </form>
        
      </div>
    </div>
  </div>
</div>
@endforeach
@endsection






@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection