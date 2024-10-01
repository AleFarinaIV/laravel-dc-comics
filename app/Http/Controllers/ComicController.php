<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $header_menu = config('db.header_menu');
        $main_navbar = config('db.main_navbar');
        $dc_comics = config('db.dc_comics');
        $shop_section = config('db.shop_section');
        $dc_section = config('db.dc_section');
        $sites_section = config('db.sites_section');
        $social_media = config('db.social_media');
        $comics = Comic::all();
        return view('comics.index', compact('comics', 'header_menu', 'main_navbar', 
        'dc_comics', 'shop_section', 'dc_section', 'sites_section', 'social_media'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $header_menu = config('db.header_menu');
        $main_navbar = config('db.main_navbar');
        $dc_comics = config('db.dc_comics');
        $shop_section = config('db.shop_section');
        $dc_section = config('db.dc_section');
        $sites_section = config('db.sites_section');
        $social_media = config('db.social_media');
        return view('comics.create', compact('header_menu', 'main_navbar', 
        'dc_comics', 'shop_section', 'dc_section', 'sites_section', 'social_media'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate(
            [
            'title' => 'required|string|max:50',
            'description' => 'required|string',
            'thumb' => 'required|url',
            'price' => 'required|numeric',
            'series' => 'required|string',
            'sale_date' => 'required|date',
            'type' => 'required|string',
        ],
        [
            'title.required' => 'The title field is required.',
            'title.string' => 'The title must be a string.',
            'title.max' => 'The title must be a maximum of 50 characters.',
            'description.required' => 'The description field is required.',
            'description.string' => 'The description must be a string.',
            'thumb.required' => 'The thumbnail field is required.',
            'thumb.url' => 'The thumbnail must be a valid URL.',
            'price.required' => 'The price field is required.',
            'price.numeric' => 'The price must be a numeric value.',
            'series.required' => 'The series field is required.',
        ]
    );

        Comic::create($data);

        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::find($id);
        $header_menu = config('db.header_menu');
        $main_navbar = config('db.main_navbar');
        $dc_comics = config('db.dc_comics');
        $shop_section = config('db.shop_section');
        $dc_section = config('db.dc_section');
        $sites_section = config('db.sites_section');
        $social_media = config('db.social_media');
        return view('comics.show', compact('comic', 'header_menu', 'main_navbar', 
        'dc_comics', 'shop_section', 'dc_section', 'sites_section', 'social_media'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::find($id);
        $header_menu = config('db.header_menu');
        $main_navbar = config('db.main_navbar');
        $dc_comics = config('db.dc_comics');
        $shop_section = config('db.shop_section');
        $dc_section = config('db.dc_section');
        $sites_section = config('db.sites_section');
        $social_media = config('db.social_media');

        $types = ['graphic novel', 'comic book', 'manga', 'webcomic'];

        return view('comics.edit', compact('comic', 'header_menu', 'main_navbar', 
        'dc_comics', 'shop_section', 'dc_section', 'sites_section', 'social_media', 'types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->validate([
            'title' => 'required|string|max:50',
            'description' => 'required|string',
            'thumb' => 'required|url',
            'price' => 'required|numeric',
            'series' => 'required|string',
            'sale_date' => 'required|date',
            'type' => 'required|string',
        ],
        [
            'title.required' => 'The title field is required.',
            'title.string' => 'The title must be a string.',
            'title.max' => 'The title must be a maximum of 50 characters.',
            'description.required' => 'The description field is required.',
            'description.string' => 'The description must be a string.',
            'thumb.required' => 'The thumbnail field is required.',
            'thumb.url' => 'The thumbnail must be a valid URL.',
            'price.required' => 'The price field is required.',
            'price.numeric' => 'The price must be a numeric value.',
            'series.required' => 'The series field is required.',
        ]
    );

        $comic->update($data);

        return redirect()->route('comics.index')->with('success', 'Comic updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        
        return redirect()->route('comics.index')->with('success', 'Comic deleted successfully!');
    }
}
