@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Crea un post</h1>

            <form action="{{route('admin.apartments.store')}}" method="POST">
                @csrf
                @method('POST')
                <div>
                    <label>Titolo Annuncio</label>
                    <input type="text" name="title" value="{{old('title')}}">
                </div>

                <div>
                    <label>Inserisci indirizzo</label>
                    <input type="text" name="address" value="{{old('address')}}">
                </div>

                <div>
                    <label>Inserisci descrizione appartamento</label>
                    <textarea name="description" cols="30" rows="10">{{old('description')}}</textarea>
                </div>

                <div>
                    <label>Inserisci città</label>
                    <input type="text" name="city" value="{{old('city')}}">
                </div>

                <div>
                    <label>Inserisci cap</label>
                    <input type="text" name="cap" value="{{old('cap')}}">
                </div>

                <div>
                    <label>Inserisci provincia</label>
                    <input type="text" name="district" value="{{old('district')}}">
                </div>

                <div>
                    <label>Inserisci numero di stanze</label>
                    <input type="number" name="rooms_number" value="{{old('rooms_number')}}">
                </div>

                <div>
                    <label>Inserisci numero di letti</label>
                    <input type="number" name="beds_number" value="{{old('beds_number')}}">
                </div>

                <div>
                    <label>Inserisci numero di bagni</label>
                    <input type="number" name="bathrooms_number" value="{{old('bathrooms_number')}}">
                </div>

                <div>
                    <label>Inserisci numero di bagni</label>
                    <input type="number" name="bathrooms_number" value="{{old('bathrooms_number')}}">
                </div>

                <div>
                    <label>Inserisci metri quadrati</label>
                    <input type="number" name="square_meters" value="{{old('square_meters')}}">
                </div>


                <input type="submit" value="salva">
            </form>
        </div>
    </div>
</div>
@endsection