@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-lg-6 left">
               <h1>{{$apartment->title}}</h1> 

               <div class="image mt-2">
                   <img src="{{$apartment->image}}" alt="{{$apartment->title}}">
               </div>
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
                
                <h3>Informazioni di Contatto</h3>
                <span>Proprietario: {{$apartment->user->name}} {{$apartment->user->surname}}</span>
                <br>
                <span>Email: {{$apartment->user->email}}</span>
                <br>
                <span>Telefono: {{$apartment->user->telephone}}</span>
                
            </div>

            <div class="col-lg-12 mt-3">
                <div class="content">
                    <h3 class="margin-top">Descrizione</h3>
                    <p>{{$apartment->description}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection

