@extends('layouts.app')

@section('content')

    @section('content')
    
        <section id="top_main"></section>
    
    
        <section id="center_main">

            <div class="container py-5">
                <div class="row">
                    <div class="col-4">
                        <img class="img-fluid" src="{{ $comic->thumb }}" alt="{{ $comic->thumb }}">
                    </div>
                    <div class="col-8">
                        <h2>{{ $comic->title }}</h2>
                        <p>{{ $comic->description }}</p>
                        <p>Price: ${{ $comic->price }}</p>
                        <p>Series: {{ $comic->series }}</p>
                        <p>Sale Date: {{ $comic->sale_date }}</p>
                        <p>Type: {{ $comic->type }}</p>
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
    
@endsection