@extends('layouts/main')
@section('content')
<h3 style="text-align: center;">Les dernières trois recettes en date</h3>

<ul class="vertical menu align-center">
@foreach($recettes as $recette)
    <li>
    <a href="{{ url('recettes/'.$recette->id) }}">{{$recette['title']}}</a> <small>{{$recette['date']}}</small> <br>
    <blockquote>{{$recette['content']}}</blockquote>
    </li>
@endforeach
</ul>
@endsection
