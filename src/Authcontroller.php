<?php

  namespace Acme;

  class AuthController{

  	protected $registration;

  	public function __construct(RegisterUser $registration){



  		$this->registration=$registration;


  	}

  	public function register(){


  			$this->registration->execute([],$this);

  	}



  	public function UserRegisterSuccess(){

 

   var_dump('created successfully, go somewhere');


  	}

  	public function UserRegisterdFailed(){


  		var_dump('created unsuccessfully.redirect back');


  		
  	}





  }