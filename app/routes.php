<?php 
namespace App;

$router->get('','PagesController@home');
$router->get('aboutus','PagesController@about');
$router->get('contact','PagesController@contact');
$router->get('users','UsersController@index');

$router->post('users','UsersController@store');
$router->post('deleteusers','UsersController@delete');
