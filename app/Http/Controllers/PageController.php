<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $header_menu = config('db.header_menu');
        $main_navbar = config('db.main_navbar');
        $dc_comics = config('db.dc_comics');
        $shop_section = config('db.shop_section');
        $dc_section = config('db.dc_section');
        $sites_section = config('db.sites_section');
        $social_media = config('db.social_media');

        return view('home', compact('header_menu', 'main_navbar', 
        'dc_comics', 'shop_section', 'dc_section', 'sites_section', 'social_media'));
    }
}
