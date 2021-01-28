@extends('layouts.layout')


@section('content')
 <h6>Utente</h6>

    <div class=>
        <div class="">
            <h2>{{ $utente->first_name }} {{ $utente->last_name }}</h2>
            <img src="{{ $utente->image }}" alt="Immagine profilo">
            <p>Email:  {{ $utente->email }}</p>
            <p>Sesso:{{ $utente->gender }}</p>
        </div>

    </div> 
    @endsection   

    

   
    
