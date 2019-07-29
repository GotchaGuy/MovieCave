<?php
namespace Cms\Controllers;

use Cms\Core\App;

class PagesController {

    public function home()
    {
        $movies = App::get('db')->fetchAll("movies");

        return view('index', compact('movies'));
    }

    public function myAccount()
    {

        return view('my-account');
    }

    public function logout()
    {
        return view('about-culture');
    }

    public function contact()
    {
        return view('contact');
    }
}