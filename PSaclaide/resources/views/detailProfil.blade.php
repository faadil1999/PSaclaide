@extends('layouts.app')

<form method="POST" action="{{ route('completerProfil') }}">
    @csrf

    <div>
        <label for="prenom">Prénom</label>
        <input id="prenom" type="text" name="prenom" required autofocus>
    </div>

    <div>
        <label for="nomFamille">Nom de famille</label>
        <input id="nomFamille" type="textarea" name="nomFamille" required>
    </div>

    <div>
        <label for="departement">Departement</label>
        <select name="departement">
        @foreach ($departements as $departement)
            <option value="{{ $departement->name }}">{{ $departement->name }}</option>
        @endforeach
        </select>
    </div>

    <div>
        <label for="anneeEtude">Année d'étude</label>
        <select name="anneeEtude">
        @for($i = 1; $i < 6; $i++)
            <option value="{{ $i }}">{{ $i }}</option>
        @endfor
        </select>
    </div>

    <div>
        <label class="switch">
        <input type="checkbox" name="prof">
        <span class="slider round"></span>
        </label>
    </div>

    <div>
        <button type="submit">
            New Annonce
        </button>
    </div>
</form>