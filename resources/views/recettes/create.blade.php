@extends('layouts/main')
@section('content')
<h3 style="text-align: center;">Ajouter une nouvelle recette </h3>

<form method="POST" action="/admin/recettes">
    @csrf
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell">
                <label>Title <span style="color: red;" title="Le champ est obligatoire">*</span>
                    <input name="title" type="text" placeholder="title" value="{{old('title')}}">
                </label>
                <span style="color: red;">@error('title'){{'Le champ title es obligatoire'}} @enderror</span>
            </div>
            <div class="cell">
                <label>
                    Vous pouvez mettre le contenue de la recette ici <span style="color: red;" title="Le champ est obligatoire">*</span>
                    <textarea name="content" placeholder="content" rows="4" value="{{old('content')}}">                    
                    </textarea>
                </label>
                <span style="color: red;">@error('content'){{$content}} @enderror</span>
            </div>
            <div class="cell">
                <label>
                    Vous pouvez taper vos ingredients ici <span style="color: red;" title="Le champ est obligatoire">*</span>
                    <textarea name="ingredients" placeholder="Ingredients" rows="4" value="{{old('ingredients')}}">                    
                    </textarea>
                </label>
                <span style="color: red;">@error('ingredients'){{$ingredients}} @enderror</span>
            </div>
            <div class="cell">
                <label>URL <span style="color: red;" title="Le champ est obligatoire">*</span>
                    <input name="url" type="text" placeholder="URL" value="{{old('url')}}">
                </label>
                <span style="color: red;">@error('url'){{'Le champ url es obligatoire'}} @enderror</span>
            </div>
            <div class="cell">
                <label>
                    Vous pouvez taper vos tags ici <span style="color: red;" title="Le champ est obligatoire">*</span>
                    <textarea name="tags" placeholder="None" rows="4" value="{{old('tags')}}">                    
                    </textarea>
                </label>
                <span style="color: red;">@error('tags'){{$tags}} @enderror</span>
            </div>
            <div class="cell">
                <label>Status <span style="color: red;" title="Le champ est obligatoire">*</span>
                    <input name="status" type="text" placeholder="status" value="{{old('status')}}">
                </label>
                <span style="color: red;">@error('status'){{'Le champ status es obligatoire'}} @enderror</span>
            </div>
        </div>
        <button class="button" >Enregistrer</button>
    </div>
</form>
@endsection