@extends('layouts.app')
@section('content')
<section>
<div class="container">
<a href="{{route('admin.projects.index')}}" class="btn btn-primary my -4" > <i class="fa-solid fa-table me-1"></i>torna ai progetti</a>

<h1>vedi project</h1>

<p><strong>{{$project['title']}}</strong></p>
<p>{{$project->type->label}}</p>
<p>{{$project['content']}}</p>
<p>{{$project->getTagsToText()}}</p>
</div>
</section>








@endsection


@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection