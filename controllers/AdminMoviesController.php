<?php
namespace Cms\Controllers;

use Cms\Core\App;
//ask vlada Cms\Controllers\
class AdminMoviesController {
    public function index()
    {
        $movies =  App::get('db')->fetchAll("movies");
        return view('admin-movies', compact('movies'));
    }

    public function find()
    {
        $movie =  App::get('db')->fetchOne("movies", $_POST);
// might be wrong pet used to be written there
        echo json_encode($movie[0]);
    }

    public function store()
    {
        App::get('db')->insert("movies", $_POST);

        echo json_encode([
            'result' => 'success'
        ]);
    }

    public function update()
    {
        App::get('db')->update("movies", $_POST);
        echo json_encode([
            'result' => 'success'
        ]);
    }

    public function delete()
    {
        App::get('db')->delete("movies", $_GET);
        return redirect('/admin/movies');
    }
}