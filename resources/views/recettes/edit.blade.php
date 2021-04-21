@extends('layouts/main')
@section('content')
<h3 style="text-align: center;">Mettre à jour les données de la recette </h3>

<form method="POST" action="/admin/recettes/{{ $recette->id }}">
    @method('PUT')
    @csrf
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell">
                <label>Title <span style="color: red;" title="Le champ est obligatoire">*</span>
                    <input name="title" type="text" placeholder="title" value="{{$recette['title']}}">
                </label>
                <span style="color: red;">@error('title'){{'Le champ title es obligatoire'}} @enderror</span>
            </div>
            <div class="cell">
                <label>
                    Vous pouvez mettre le contenue de la recette ici <span style="color: red;" title="Le champ est obligatoire">*</span>
                    <textarea name="content" placeholder="content" rows="4">
                    {{$recette['content']}}
                    </textarea>
                </label>
                <span style="color: red;">@error('content'){{$content}} @enderror</span>
            </div>
            <div class="cell">
                <label>
                    Vous pouvez taper vos ingredients ici <span style="color: red;" title="Le champ est obligatoire">*</span>
                    <textarea name="ingredients" placeholder="Ingredients" rows="4">
                    {{$recette['ingredients']}}
                    </textarea>
                </label>
                <span style="color: red;">@error('ingredients'){{$ingredients}} @enderror</span>
            </div>
            <div class="cell">
                <label>URL <span style="color: red;" title="Le champ est obligatoire">*</span>
                    <input name="url" type="text" placeholder="URL" value="{{$recette['url']}}">
                </label>
                <span style="color: red;">@error('url'){{'Le champ url es obligatoire'}} @enderror</span>
            </div>
            <div class="cell">
                <label>
                    Vous pouvez taper vos tags ici <span style="color: red;" title="Le champ est obligatoire">*</span>
                    <textarea name="tags" placeholder="None" rows="4">
                    {{$recette['tags']}}
                    </textarea>
                </label>
                <span style="color: red;">@error('tags'){{$tags}} @enderror</span>
            </div>
            <div class="cell">
                <label>Status <span style="color: red;" title="Le champ est obligatoire">*</span>
                    <input name="status" type="text" placeholder="status" value="{{$recette['status']}}">
                </label>
                <span style="color: red;">@error('status'){{'Le champ status es obligatoire'}} @enderror</span>
            </div>
        </div>
        <button class="button" >Enregistrer</button>

        <form method="POST" action="/admin/recettes/{{ $recette->id }}">
            @csrf

            @method('DELETE')
            <button  class="alert button" style="margin-left: 20px;">Supprimer la recette</button>
        </form>

        <a href="/admin/recettes" style="font-weight: bold; color:lightcoral; margin-left:20px;">Annuler</a>
    </div>
</form>
@endsection