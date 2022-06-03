<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;



class TentangController extends Controller
{

    public function __construct()
    {
        SEOMeta::setTitle('Home');
        SEOMeta::setDescription('This is my page description');
        SEOMeta::setCanonical('https://codecasts.com.br/lesson');

        OpenGraph::setDescription('This is my page description');
        OpenGraph::setTitle('Home');
        OpenGraph::setUrl('http://current.url.com');
        OpenGraph::addProperty('type', 'articles');

        TwitterCard::setTitle('Homepage');
        TwitterCard::setSite('@LuizVinicius73');

        JsonLd::setTitle('Homepage');
        JsonLd::setDescription('This is my page description');
        JsonLd::addImage('https://codecasts.com.br/img/logo.jpg');
    }

    public function index()
    {

        // $meta_seo = [
        //     SEOMeta::setTitle('Tentang'),
        //     SEOMeta::setDescription('meta tag description'),
        //     SEOMeta::setCanonical('https://codecasts.com.br/lesson'),

        //     OpenGraph::setDescription('This is my page description'),
        //     OpenGraph::setTitle('Home'),
        //     OpenGraph::setUrl('http://current.url.com'),
        //     OpenGraph::addProperty('type', 'articles'),

        //     TwitterCard::setTitle('Homepage'),
        //     TwitterCard::setSite('@LuizVinicius73'),

        //     JsonLd::setTitle('Homepage'),
        //     JsonLd::setDescription('This is my page description'),
        //     JsonLd::addImage('https://codecasts.com.br/img/logo.jpg'),
        // ];


        return view('Frontend.Tentang');
    }
}
