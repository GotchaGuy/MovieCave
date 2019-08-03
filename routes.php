<?php
$router->get('', 'PagesController@logIn');
$router->get('movies', 'PagesController@movies');
$router->get('my_account', 'PagesController@my_account');

//$router->get('about/culture', 'PagesController@aboutCulture');
//$router->get('contact', 'PagesController@contact');
//
//$router->get('api/tasks', 'TasksController@apiGet');

//$router->post('contact/submit', 'controllers/contact-submit.php');
//
//$router->post('tasks/submit', 'TasksController@store');

//admin movies
$router->get('admin/movies', 'AdminMoviesController@index');
$router->post('admin/movies/find', 'AdminMoviesController@find');
$router->post('admin/movies', 'AdminMoviesController@store');
$router->post('admin/movies/update', 'AdminMoviesController@update');
$router->post('admin/movies/delete', 'AdminMoviesController@delete');

// admin genres
$router->get('admin/genres', 'AdminGenresController@index');
$router->post('admin/genres/find', 'AdminGenresController@find');
$router->post('admin/genres', 'AdminGenresController@store');
$router->post('admin/genres/update', 'AdminGenresController@update');
$router->post('admin/genres/delete', 'AdminGenresController@delete');



/*
 * API ROUTES
 */
$router->get('api/something', 'ApiController@getSomething');

$router->get('api/pets', 'ApiPetsController@index');
$router->post('api/pets/find', 'ApiPetsController@find');
$router->post('api/pets', 'ApiPetsController@store');
$router->post('api/pets/update', 'ApiPetsController@update');
$router->post('api/pets/delete', 'ApiPetsController@delete');






