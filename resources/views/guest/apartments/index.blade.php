@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>La lista completa degli appartamenti</h1>
                {{-- {{route('guest.apartments.show', $apartment)}} --}}
                <ul>
                    @foreach ($apartments as $apartment)
                        <li>{{$apartment->title}} - <span> Annuncio di: {{$apartment->user->name}}</span></li>
                        <a href="#">vedi dettaglio</a>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection