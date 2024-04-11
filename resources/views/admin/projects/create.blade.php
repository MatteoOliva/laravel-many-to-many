@extends('layouts.app')
@section('content')
<section>
<div class="container">
<a href="{{route('admin.projects.index')}}" class="btn btn-primary my -4" > <i class="fa-solid fa-table me-1"></i>torna ai progetti</a>

<h1>Crea project</h1>

<form action="{{route('admin.projects.store')}}" class="row g-3" method="POST">
@csrf


<div class="col-12">
    <label class="form-label" for="title">Titolo</label>
    <input class="form-control" type="text" name="title" id="title">
</div>

<div class="col-12">
    <label class="form-label" for="type_id">Tipo</label>

    <select class="form-select" name="type_id" id="type_id">
        <option value="">Seleziona un tipo</option>

        @foreach($types as $type)
        <option value="{{$type->id}}">{{$type->label}}</option>
        @endforeach
    </select>
    
    @error('type_id')
    <div class="invalid-feedback">{{$message}}</div>
    @enderror
</div>

<div class="col-12">
    <label class="form-label" for="content">Contenuto</label>
    <textarea class="form-control" type="text" name="content" id="content" rows="5"></textarea>
</div>

<div class="col-12">
<button class="btn btn-success">
<i class="fa-solid fa-floppy-disk me-1"></i>
salva
</button>

</div>



</form>

</div>
</section>








@endsection


@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection