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


$router->get('admin/movies', 'AdminMoviesController@index');
$router->post('admin/movies/find', 'ApiMoviesController@find');
$router->post('admin/movies', 'ApiMoviesController@store');
$router->post('admin/movies/update', 'ApiMoviesController@update');
$router->post('admin/movies/delete', 'AdminMoviesController@delete');





/*
 * API ROUTES
 */
$router->get('api/something', 'ApiController@getSomething');

$router->get('api/pets', 'ApiPetsController@index');
$router->post('api/pets/find', 'ApiPetsController@find');
$router->post('api/pets', 'ApiPetsController@store');
$router->post('api/pets/update', 'ApiPetsController@update');
$router->post('api/pets/delete', 'ApiPetsController@delete');






