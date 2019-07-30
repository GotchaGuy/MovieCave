<?php
namespace Cms\Controllers;

use Cms\Core\App;

class PagesController {

    public function logIn()
    {
        $users = App::get('db')->fetchAll("users");

        return view('index', compact('users'));
    }

    public function movies()
    {
        $movies = App::get('db')->fetchAll("movies");

        return view('movies', compact('movies'));
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