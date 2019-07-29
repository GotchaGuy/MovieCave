<?php
namespace Cms\Controllers;

use Cms\Core\App;

class PagesController {

    public function home()
    {
        $movies = App::get('db')->fetchAll("movies");

        return view('index', compact('movies'));
    }

    public function about()
    {

        return view('about');
    }

    public function aboutCulture()
    {
        return view('about-culture');
    }

    public function contact()
    {
        return view('contact');
    }
}