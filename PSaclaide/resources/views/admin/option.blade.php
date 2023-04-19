@extends('layouts.web')
@section('main')

    <link rel="stylesheet" href="auth_assets/css/option.css">

        <section class="options-container">
            <h2>Modifier les options</h2>
            <form method="POST" action="{{ route('modifierPassword') }}">
            @csrf
                <div class="input-group">
                    <label for="email">Adresse e-mail</label>
                    <input type="email" id="email" name="email" value="{{ auth()->user()->email }}" readonly>
                </div>
                <div class="input-group">
                    <label for="old-password">Mot de passe actuel</label>
                    <input type="password" id="old-password" name="old-password" required>
                </div>
                <div class="input-group">
                    <label for="password">Nouveau mot de passe</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="input-group">
                    <label for="password_confirmation">Confirmer le nouveau mot de passe</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" required>
                </div>
                @if ($errors->has('old-password'))
                    <div class="error" style="color: red">
                        {{ $errors->first('old-password') }}
                    </div>
                @elseif ($errors->has('password'))
                    <div class="error" style="color: red">
                        {{ $errors->first('password') }}
                    </div>
                @elseif ($errors->has('password_confirmation'))
                    <div class="error" style="color: red">
                        {{ $errors->first('password_confirmation') }}
                    </div>
                @elseif(isset($message))
                    <div class="alert alert-success" style="color: green">
                        {{ $message }}
                    </div>
                @endif

                <button type="submit" class="confirm-button">Enregistrer les modifications</button>
            </form>
        </section>

        @if ($user->isTeacher == 0) 
        <section class="options-container" style="margin-top:5px;">
            <h2>Devenir professeur</h2>
            <form method="POST" action="{{ route('devenirProfesseur') }}">
            @csrf
                <label class="checkbox-container" >
                    Cochez cette case pour devenir professeur
                    <input type="checkbox" name="prof"/>
                    <span class="checkmark"></span>
                </label><br>

                <button type="submit" class="confirm-button">Enregistrer les modifications</button>
            </form>
        </section>
        @endif
    
@endsection
