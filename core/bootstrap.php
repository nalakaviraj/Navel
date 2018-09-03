<?php
use App\core\App;


App::bind('config',$config=require'config.php');



App::bind('database',new QueryBuilder(

Connection::make($config['database'])

));


function view($view,$data=[])
{	


	
	$users=$data;

	return require "app/view/{$view}.view.php";

}

function redirect($path){


	header("Location:/{$path}");

}

 




