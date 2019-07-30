<?php
$router->get('', 'PagesController@logIn');
$router->get('movies', 'PagesController@movies');
$router->get('about', 'PagesController@about');
$router->get('about/culture', 'PagesController@aboutCulture');
$router->get('contact', 'PagesController@contact');

$router->get('api/tasks', 'TasksController@apiGet');

//$router->post('contact/submit', 'controllers/contact-submit.php');

$router->post('tasks/submit', 'TasksController@store');

$router->get('admin/movies', 'AdminMoviesController@index');
$router->get('admin/movies/delete', 'AdminMoviesController@delete');


/*
 * API ROUTES
 */
$router->get('api/something', 'ApiController@getSomething');

$router->get('api/pets', 'ApiPetsController@index');
$router->post('api/pets/find', 'ApiPetsController@find');
$router->post('api/pets', 'ApiPetsController@store');
$router->post('api/pets/update', 'ApiPetsController@update');
$router->post('api/pets/delete', 'ApiPetsController@delete');






