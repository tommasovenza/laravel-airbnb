@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Benvenuto {{$user->name}}, ecco la lista dei tuoi appartamenti</h1>

               <ul>
                    @foreach ($apartments as $apartment)
                        {{-- se l'id utente checkato è uguale all'id utente nella lista appartamenti --}}
                        @if ($user->id == $apartment->user->id)
                            {{-- ...pubblica una lista dei suoi appartamenti --}}
                            <li>{{$apartment->title}}</li>
                            <a href="{{ route('admin.apartments.show', $apartment)}}" class="btn btn-primary">Dettaglio Annuncio</a>
                        @endif
                    @endforeach
               </ul>
            </div>
        </div>
    </div>
@endsection



