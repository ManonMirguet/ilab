@extends('layouts.app')

@section('styleApp')
    <link href="{{ asset('css/app.css') }}"  rel="stylesheet">
@endsection

@section('homeBody', 'tutoBody')

@section('header')
    <!-- HAMBURGER -->
    <div class="hamb">
        <div id="bar1" class="hamb__bar--big"></div>
        <div id="bar2" class="hamb__bar--small"></div>
        <div id="bar3" class="hamb__bar"></div>
    </div>
    <nav class="nav">
        <ul class="nav__list">
            <li class="nav__el">
                <a class="nav__link" href="{{ route('home') }}">Potager</a>
            </li>
            <li class="nav__el">
                <a class="nav__link" href="#">Tâches</a>
            </li>
            <li class="nav__el">
                <a class="nav__link" href="{{ route('plantation') }}">Nouvelle culture</a>
            </li>
            <li class="nav__el">
                <a class="nav__link" href="{{ route('tuto') }}">Trucs et astuces</a>
            </li>
            <li class="nav__el">
                <a class="nav__link" href="#">Vos envies</a>
            </li>
            <li class="nav__el">
                <a class="nav__link" href="#">7 points clés</a>
            </li>
            <li class="nav__el">
                <a class="nav__link" href="#">Déconnexion</a>
            </li>
        </ul>
    </nav>
@endsection

@section('content')
    <div class="container">
        <h2 class="title title--big title__plantation">Lancer une nouvelle culture</h2>
        <h3 class="title title--light">Choisissez un végétal parmi cette liste</h3>
    </div>
    <!-- champ de recherche -->
    <div class="plantation plantation--big">
        <ul class="plantation__list">
            <li class="plantation__el">
                <h2 class="title title--center">Persil</h2>
                <img class="plantation__img" src="{{ asset('img/legumes/persil.png') }}" alt="légume-edenia" />
                <p class="text text--italic">Persil commun</p>
                <p class="text">Difficulté</p>
                <a class="btn__tuto" href="{{ route('info') }}">En savoir +</a>
            </li>
            <li class="plantation__el">
                <h2 class="title title--center">Choux-fleur</h2>
                <img class="plantation__img" src="{{ asset('img/legumes/choufleur.png') }}" alt="légume-edenia" />
                <p class="text text--italic">Persil commun</p>
                <p class="text">Difficulté</p>
                <a class="btn__tuto" href="{{ route('info') }}">En savoir +</a>
            </li>
            <li class="plantation__el">
                <h2 class="title title--center">Potimarron</h2>
                <img class="plantation__img" src="{{ asset('img/legumes/potimaron.png') }}" alt="légume-edenia" />
                <p class="text text--italic">Persil commun</p>
                <p class="text">Difficulté</p>
                <a class="btn__tuto" href="{{ route('info') }}">En savoir +</a>
            </li>
            <li class="plantation__el">
                <h2 class="title title--center">Tomate</h2>
                <img class="plantation__img" src="{{ asset('img/legumes/tomate.png') }}" alt="légume-edenia" />
                <p class="text text--italic">Persil commun</p>
                <p class="text">Difficulté</p>
                <a class="btn__tuto" href="{{ route('info') }}">En savoir +</a>
            </li>
            <li class="plantation__el">
                <h2 class="title title--center">Epinard</h2>
                <img class="plantation__img" src="{{ asset('img/legumes/epinard.png') }}" alt="légume-edenia" />
                <p class="text text--italic">Persil commun</p>
                <p class="text">Difficulté</p>
                <a class="btn__tuto" href="{{ route('info') }}">En savoir +</a>
            </li>
            <li class="plantation__el">
                <h2 class="title title--center">Fraise</h2>
                <img class="plantation__img" src="{{ asset('img/legumes/fraise.png') }}" alt="légume-edenia" />
                <p class="text text--italic">Persil commun</p>
                <p class="text">Difficulté</p>
                <a class="btn__tuto" href="{{ route('info') }}">En savoir +</a>
            </li>
        </ul>
    </div>
    <a class="btn--light tuto__link" href="#">Découvrir et traiter les maladies</a>
@endsection
@section('scripts')
    <script src="{{ asset('js/tuto.js') }}"></script>
@endsection