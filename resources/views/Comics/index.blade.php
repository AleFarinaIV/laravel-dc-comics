@extends('layouts.app')

@section('content')

    <section id="top_main"></section>

    <section id="center_main">

        <div id="series_label" class="text-center">
            <P class="mb-4">CURRENT SERIES</P>
        </div>

        <div class="container pt-5">
            <div class="d-flex justify-content-between align-items-center py-3">
                <a href="{{ route('comics.create') }}" class="btn btn-primary">Create New Comic</a>
                @if (session('success'))
                <span class="alert alert-success ms-5">
                    {{ session('success') }}
                </span>
            @endif
            </div>
            <div class="row">
                @if ($comics->isEmpty())
                    <p>No comics available.</p>
                @else
                    @foreach ($comics as $comic)
                        <div class="col-3 mb-4">
                            <div class="border border-2 border-secondary p-2 rounded">
                                <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
                                <div class="d-flex justify-content-between mt-2">
                                    <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-info px-4">View</a>
                                    <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning px-4">Edit</a>
                                    <form action="{{ route('comics.destroy', $comic->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger px-4" onclick="return confirm('Are you sure you want to delete this comic?')">Delete</button>
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

                @foreach ($main_navbar as $item)
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
