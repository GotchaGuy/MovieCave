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
        $genre =  App::get('db')->fetchOne("genres", $_POST)[0];
        echo json_encode($genre);
    }

    public function store()
    {
//        dd($_POST);
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

    public function edit()
    {
        $genre =  App::get('db')->fetchOne("genres", $_GET)[0];

        return view('admin-genres-edit', compact('genre'));
    }


    public function delete()
    {
        App::get('db')->delete("genres", $_GET);
        return redirect('/admin/genres');
    }
}