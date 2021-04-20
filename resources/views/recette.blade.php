@extends('layouts/main')
@section('content')
<div class="row align-center">
    <div class="card" style="width: 350px; margin:auto;">
        <div class="card-divider">
        {{ $name }}
        </div>
        <div class="card-section">
            <h4>{{$recipe['date']}}</h4>
            <p>{{$recipe['content']}}</p>
        </div>
    </div>
</div>
@endsection