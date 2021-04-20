@extends('layouts/main')
@section('content')
<div class="row align-center">
    <h3 style="text-align: center;"> Ajouter un commentaire </h3>
    @if(Session::has('message_envoye'))
    <div>
        {{Session::get('message_envoye')}}
    </div>
    @endif
    <hr>
    @if(Session::get('success'))
    <div class="medium-6 cell callout success text-center">
        {{Session::get('success')}}
    </div>
    @endif
    @if(Session::get('fail'))
    <div class="medium-6 cell callout warning text-center">
        {{Session::get('fail')}}
    </div>
    @endif
    <form method="POST" action="{{route('contact.send')}}">
        @csrf
        <div class="grid-container">
            <div class="grid-x grid-padding-x">
                <div class="cell">
                    <label>Nom <span style="color: red;" title="Le champ est obligatoire">*</span>
                        <input name="name" type="text" placeholder="nom" value="{{old('name')}}">
                    </label>
                    <span style="color: red;">@error('name'){{'Le champ nom es obligatoire'}} @enderror</span>
                </div>
                <div class="cell">
                    <label>E-Mail <span style="color: red;" title="Le champ est obligatoire">*</span>
                        <input name="email" type="mail" placeholder="email" style="width: 100%;" value="{{old('email')}}">
                    </label>
                    <span style="color: red;">@error('email'){{$message}} @enderror</span>
                </div>
                <div class="cell">
                    <label>
                        Vous pouvez taper votre message ici <span style="color: red;" title="Le champ est obligatoire">*</span>
                        <textarea name="message" placeholder="None" rows="4" value="{{old('message')}}"></textarea>
                    </label>
                    <span style="color: red;">@error('message'){{$message}} @enderror</span>
                </div>
            </div>
            <button class="button" type="submit">Envoyer</button>
        </div>
    </form>
</div>
<hr style="width: 100%; border: 1px solid lightblue;">
<h3 style="text-align: center;">Tous les contacts</h3>
<div class="grid-container">
    <div class="grid-x grid-padding-x">
        <div class="cell">
            <table style="border: 1px solid ligthblue;">
                <tr>
                    <th>Nom</th>
                    <th>E-Mail</th>
                    <th>Message</th>
                </tr>
                @foreach($contacts as $contact)
                <tr>
                    <td>{{$contact['name']}}</td>
                    <td>{{$contact['email']}}</td>
                    <td>{{$contact['message']}}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection