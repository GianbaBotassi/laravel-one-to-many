@extends('layouts.app')
@section('content')
    <div class="container my-2">
        <div class="text-center">Titolo Progetto:</div>
        <h1 class="text-center">{{ ucfirst($projects->name) }}</h1>
        <div class="container d-flex justify-content-between align-items-center">
            <span><strong>Descrizione:</strong> </span>
            <span>{{ $projects->description }}</span>
        </div>
        <div class="container d-flex justify-content-between align-items-center">
            <span><strong>Numero collaboratori:</strong> </span>
            <span>{{ $projects->collaborators }}</span>
        </div>
        <div class="container d-flex justify-content-between align-items-center">
            <span><strong>Visibilità:</strong> </span>
            <span>{{ $projects->collaborators ? 'Privato' : 'Pubblico' }}</span>
        </div>
    </div>
@endsection
