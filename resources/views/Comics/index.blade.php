@extends('layouts.app')

@section('content')

    <section id="top_main"></section>

    <section id="center_main">

        <div id="series_label" class="text-center">
            <P class="mb-4">CURRENT SERIES</P>
        </div>

        <div class="container pt-5">
            <div class="py-3">
                <a href="{{ route('comics.create') }}" class="btn btn-primary">Create New Comic</a>
            </div>
            <div class="row">
                @if ($comics->isEmpty())
                    <p>No comics available.</p>
                @else
                    @foreach ($comics as $comic)
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $comic->title }}</h5>
                                    <p class="card-text">{{ $comic->description }}</p>
                                    <p><strong>Price:</strong> ${{ number_format($comic->price, 2) }}</p>
                                    <p><strong>Series:</strong> {{ $comic->series }}</p>
                                    <p><strong>Type:</strong> {{ $comic->type }}</p>
                                    <p><strong>Sale Date:</strong> {{ \Carbon\Carbon::parse($comic->sale_date)->format('d-m-Y') }}</p>
    
                                    <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-info">View</a>
                                    <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning">Edit</a>
    
                                    <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>

    <section id="bottom_main">

        <div id="main_navbar" class="container-full bg-primary">
            <div id="main_navbar_section" class="d-flex justify-content-center align-items-center pt-5">

                @foreach($main_navbar as $item)

                    <a href="{{ $item['url'] }}">
                        <div id="logo_img_container" class="d-flex justify-content-center align-items-center">
                          <img src="{{ Vite::asset($item['logo']) }}" alt="{{ $item['text'] }}">
                          <p class="m-0">{{ $item['text'] }}</p>
                        </div>
                    </a>

                @endforeach

            </div>
        </div>

    </section>
@endsection