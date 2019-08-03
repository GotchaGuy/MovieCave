<?php
namespace Cms\Controllers;

use Cms\Core\App;
//ask vlada Cms\Controllers\
class AdminGenresController {
    public function index()
    {
        $genres =  App::get('db')->fetchAll("genres");
        return view('admin-genres', compact('genres'));
    }

    public function find()
    {
        $genre =  App::get('db')->fetchOne("genres", $_POST);
        echo json_encode($genre[0]);
    }

    public function store()
    {
        App::get('db')->insert("genres", $_POST);

        echo json_encode([
            'result' => 'success'
        ]);
    }

    public function update()
    {
        App::get('db')->update("genres", $_POST);
        echo json_encode([
            'result' => 'success'
        ]);
    }

    public function delete()
    {
        App::get('db')->delete("genres", $_GET);
        return redirect('/admin/genres');
    }
}