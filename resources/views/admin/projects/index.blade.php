@extends('layouts.app')
@section('content')

<div class="container">
<h1>Lista projects</h1>

<table class="table">

<thead>
<tr>
    <th>titolo</th>
    <th>slug</th>
    <th>content</th>
</tr>
</thead>
<tbody>
@forelse($projects as $project)

<tr>
    <td>{{$project->title}}</td>
    <td>{{$project->slug}}</td>
    <td>{{$project->content}}</td>
    
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




</div>









@endsection