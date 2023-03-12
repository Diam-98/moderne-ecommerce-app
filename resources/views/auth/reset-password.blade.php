@extends('auth.auth-layout')
@section('form')
    <!-- Account Logo -->
    <div class="account-logo">
        <a href="index.html"><img src="{{ asset('assets/back/img/logo2.jpg') }}" alt="Dreamguy's Technologies"></a>
    </div>
    <!-- /Account Logo -->
    <div class="account-box">
        <div class="account-wrapper">
            <h3 class="account-title">Reunitialisation</h3>
            <p class="account-subtitle">Mis jour du mot de passe</p>
            <!-- Account Form -->
            <form method="POST" action="{{ route('password.store') }}">
                @csrf

                <!-- Password Reset Token -->
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <div class="form-group">
                    <label>Votre adresse email</label>
                    <input class="form-control" type="text" name="email" required autofocus>
                </div>
                <div class="form-group">
                    <label>Nouveau mot de passe</label>
                    <input class="form-control" type="password" type="password" name="password" required>
                </div>
                <div class="form-group">
                    <label>Confirmation de mot de passe</label>
                    <input class="form-control" type="password" type="password" name="password_confirmation" required>
                </div>
                <div class="form-group text-center">
                    <button class="btn btn-primary account-btn" type="submit">Reunitialiser</button>
                </div>
            </form>
            <!-- /Account Form -->
        </div>
    </div>
@endsection

