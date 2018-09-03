<?php
namespace App\controllers;
use App\core\App;


class UsersController
{

public function index(){

	$users=App::get('database')->selectAll('users');

	return view('users',$users);

}

public function store(){


App::get('database')->insert('users',[


'name'=>$_POST['name']

]);

return redirect('users');



}


public function delete(){


App::get('database')->delete('users',[


'name'=>$_POST['name']

]

);

return redirect('users');



}


}