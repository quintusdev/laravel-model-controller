@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row p-5">
            <div class="col-10">
                <img class="mt-3" src="{{ $comic->thumb }}" alt="">
                <h3 class="text-success fw-bold mt-4">{{ $comic->title }}</h3>
                <br>
                <p>{{ $comic->description }}</p>
                <br>
                <h3>Prezzo:<span class="fw-bold mt-4">{{ $comic->price }}</span></h3>
                <br>
                <a href="/">Ritorna alla Home</a>
            </div>
        </div>
    </div>
@endsection
