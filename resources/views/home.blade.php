@extends('layouts.app')

@section('content')
    <div class="bg-dark">
        <div class="container">
            <div class="row">
                <h1 class="fw-bold text-white text-center">COMICS</h1>
                <div class="col-12 d-flex flex-wrap">
                    @forelse ($comics as $comic)
                        <div class="col-3 p-4 d-flex justify-content-center m-5">
                            <div class="card">
                                <a class="text-decoration-none text-black" href="{{ route('comic.show', $comic->id) }}">
                                    <img src="{{ $comic->thumb }}" alt="">
                                    <h5>{{ $comic->series }}</h5>
                                </a>
                            </div>
                        </div>
                    @empty
                        <div class="col-12">
                            Sorry no COMIC found!
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
