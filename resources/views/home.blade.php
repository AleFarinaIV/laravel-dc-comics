@extends('layouts.app')

@section('content')

    <section id="top_main"></section>

    <section id="center_main">

        <div id="series_label" class="text-center">
            <P class="mb-4">CURRENT SERIES</P>
        </div>

        <h1 class="py-5 text-center">Questa è la Homepage</h1>

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