@extends('layouts.layout')

@section('content')
 <div class="users-container">
        @foreach ($utenti as $utente)
        <div class="utenti">
            <h2>{{ $utente->first_name }} {{ $utente->last_name }}</h2>
            <img src="{{ $utente->image }}" alt="Immagine profilo">
            <p>Email:  {{ $utente->email }}</p>
            <p>Sesso:  {{ $utente->gender }}</p>
             <a href="utenti/{{ $utente->id }}">Profilo dettagliato</a> 
            <br>
        </div>
        @endforeach
    </div> 
    
@endsection

  
    
        
    
