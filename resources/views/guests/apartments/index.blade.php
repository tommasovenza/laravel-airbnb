@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>La lista completa degli appartamenti</h1>
                
                <ul>
                    @foreach ($apartments as $apartment)
                        <li>{{$apartment->title}} - <span class="span">Annuncio di: {{$apartment->user->name}}</span></li>
                        <a class="btn btn-primary" href="{{route('guests.apartment.show', $apartment)}}">dettaglio</a> 
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection