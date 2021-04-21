@extends('layouts/main')
@section('content')
<div style="text-align: center;">
    <h2>Toutes les Recettes</h2>
    <a href="/admin/recettes/create" style="font-weight: bold; font-size: large;"> Ajouter une recette </a>
</div>
<hr style="border: 1px solide lightblue; width:100%">
<table style="border: 1px solid ligthblue;">
    <tr>
        <th>Id</th>
        <th>Author Id</th>
        <th>Title</th>
        <th>url</th>
        <th>date</th>
    </tr>
    @foreach($recettes as $recette)
    <tr>
        <td>{{$recette['id']}}</td>
        <td>{{$recette['author_id']}}</td>
        <td>{{$recette['title']}}</td>
        <td>
            <a href="/admin/recettes/{{$recette->id }}/edit" title="Mette à jour la recette"> {{$recette['url']}} </a>
        </td>
        <td>{{$recette['date']}}</td>
    </tr>
    @endforeach
</table>
@endsection