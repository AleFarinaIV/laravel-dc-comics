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
    public function store(StoreComicRequest $request)
    {
        Comic::create($request->validated());

        return redirect()->route('comics.index')->with('success', 'Comic created successfully!');;
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
    public function update(UpdateComicRequest $request, Comic $comic)
    {
        $comic->update($request->validated());

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
