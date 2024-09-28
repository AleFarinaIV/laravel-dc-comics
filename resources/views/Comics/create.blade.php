@extends('layouts.app')

@section('content')

<section id="top_main"></section>

<section id="center_main">

    <div id="series_label" class="text-center">
        <P class="mb-4">CURRENT SERIES</P>
    </div>

    <div class="container py-5">
        <h1>Create New Comic</h1>
    
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
    
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" required></textarea>
            </div>
    
            <div class="mb-3">
                <label for="thumb" class="form-label">Thumbnail URL</label>
                <input type="url" class="form-control" id="thumb" name="thumb" required>
            </div>
    
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price" required step="0.01">
            </div>
    
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" id="series" name="series" required>
            </div>
    
            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" required>
            </div>
    
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" id="type" name="type" required>
            </div>
    
            <button type="submit" class="btn btn-primary">Create Comic</button>
        </form>
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

@endsection