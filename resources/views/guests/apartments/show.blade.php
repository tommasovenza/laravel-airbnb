@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-lg-6 left">
               <h1>{{$apartment->title}}</h1> 

               <h2 class="red">Effettua la registrazione</h2>
               <p> Effettua la registrazione per vedere immagine e descrizione dell'appartamento e contattare {{$apartment->user->name}}</p>
            </div>

            <div class="col-lg-6 mt-5 right">
                <h3 class="mt-5">Informazioni Logistiche</h3>
                <span>Indirizzo: {{$apartment->address}}</span><br>
                <span>Città: {{$apartment->city}}</span><br>
                <span>Cap: {{$apartment->cap}}</span><br>
                <span>Provincia: {{$apartment->district}}</span>

                <h3>Caratteristiche Appartamento</h3>
                <span>Camere: {{$apartment->rooms_number}}</span>
                <br>
                <span>Posti Letto: {{$apartment->beds_number}}</span>
                <br>
                <span>Bagni: {{$apartment->bathrooms_number}}</span>
                <br>
                <span>Metri quadrati: {{$apartment->square_meters}}</span>                 
            </div>
        </div>
    </div>
@endsection

