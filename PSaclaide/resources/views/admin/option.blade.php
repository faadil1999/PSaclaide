<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier les options</title>
    <link rel="stylesheet" href="auth_assets/css/option.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <a href="/home">Accueil</a>
            <a href="#">Options</a>
        </nav>
    </header>

    <main class="container">
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
                @if ($errors->has('password'))
                    <div class="error" style="color: red">
                        {{ $errors->first('password') }}
                    </div>
                @elseif ($errors->has('new-password'))
                    <div class="error" style="color: red">
                        {{ $errors->first('new-password') }}
                    </div>
                @elseif ($errors->has('confirm-password'))
                    <div class="error" style="color: red">
                        {{ $errors->first('confirm-password') }}
                    </div>
                @elseif(isset($message))
                    <div class="alert alert-success" style="color: green">
                        {{ $message }}
                    </div>
                @endif

                <button type="submit" class="confirm-button">Enregistrer les modifications</button>
            </form>
        </section>
    </main>
</body>
</html>
