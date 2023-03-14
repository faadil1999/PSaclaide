@extends('layouts.app')

<form method="POST" action="{{ route('createAnnonce') }}">
    @csrf

    <div>
        <label for="desc">Création annonce : {{ $user->first_name }}</label>
    </div>

    <div>
        <label for="mode">Individuel</label>
        <input id="mode" type="radio" name="mode" value="modeInd" required autofocus>
    </div>

    <div>
        <label for="mode">Collectif</label>
        <input id="mode" type="radio" name="mode" value="modeCol" required autofocus>
    </div>

    <div>
        <label for="title">Titre</label>
        <input id="title" type="text" name="title" required autofocus>
    </div>

    <div>
        <label for="desc">Description</label>
        <input id="desc" type="textarea" name="description" required>
    </div>

    <div>
        <label for="matiere">Matière</label>
        <select name="matiere">
        @foreach ($matieres as $matiere)
            <option value="{{ $matiere->name }}">{{ $matiere->name }}</option>
        @endforeach
        </select>
    </div>

    <div>
        <label for="date">Date:</label>
        <input type="date" id="date" name="date">

        <label for="time">Horaire:</label>
        <input type="time" id="time" name="time">
    </div>

    <div>
        <button type="submit">
            New Annonce
        </button>
    </div>
</form>
