@extends('layouts.app')

@section('content')

    <section id="top_main"></section>

    <section id="center_main">
        <div class="container py-5">
            <div class="text-center text-white mb-4">
                <span class="bg-primary fs-2 fw-semibold fst-italic border rounded border-3 border-dark px-4">HERE YOU COULD EDIT COMIC SPECIFICS!</span>
            </div>
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group py-3">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title"
                                value="{{ old('title', $comic->title) }}">
                            @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group py-3">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3">{{ old('description', $comic->description) }}</textarea>
                            @error('description')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group py-3">
                            <label for="thumb">Thumbnail</label>
                            <input type="text" class="form-control" id="thumb" name="thumb"
                                value="{{ old('thumb', $comic->thumb) }}">
                            @error('thumb')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group py-3">
                            <label for="price">Price</label>
                            <input type="number" class="form-control" id="price" name="price"
                                value="{{ old('price', $comic->price) }}">
                            @error('price')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group py-3">
                            <label for="series">Series</label>
                            <input type="text" class="form-control" id="series" name="series"
                                value="{{ old('series', $comic->series) }}">
                            @error('series')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group py-3">
                            <label for="sale_date">Sale Date</label>
                            <input type="date" class="form-control" id="sale_date" name="sale_date"
                                value="{{ old('sale_date', $comic->sale_date) }}">
                            @error('sale_date')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group d-flex flex-column align-items-start w-25 py-3">
                            <label for="type">Type</label>
                            <select name="type" id="type" class="form-select mt-2">
                                @foreach ($types as $type)
                                    <option value="{{ $type }}"
                                        @if($type == old('type', $comic->type)) selected @endif
                                    >{{ $type }}</option>
                                @endforeach
                            </select>
                            {{-- <input type="text" class="form-control" id="type" name="type"
                                value="{{ old('type', $comic->type) }}"> --}}
                            @error('type')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Update Comic</button>
                    </form>
                </div>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
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
