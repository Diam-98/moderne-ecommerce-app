@extends('auth.auth-layout')
@section('form')
    <!-- Account Logo -->
    <div class="account-logo">
        <a href="index.html"><img src="{{ asset('assets/back/img/diamil_tech_dev.png') }}" alt="Dreamguy's Technologies"></a>
    </div>
    <!-- /Account Logo -->
    <div class="account-box">
        <div class="account-wrapper">
            <h3 class="account-title">Connexion</h3>
            <p class="account-subtitle">Acceder l'espace d'administration</p>
            <!-- Account Form -->
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label>Adresse email</label>
                    <input class="form-control" type="text" name="email" required autofocus>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label>Mot de passe</label>
                        </div>
                        <div class="col-auto">
                            @if (Route::has('password.request'))
                                <a class="text-muted" href="{{ route('password.request') }}">
                                    {{ __('Mot de passe oublie?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                    <input class="form-control" type="password" type="password" name="password" required>
                </div>
                <div class="form-group text-center">
                    <button class="btn btn-primary account-btn" type="submit">Se Connecter</button>
                </div>
            </form>
            <!-- /Account Form -->
        </div>
    </div>
@endsection
