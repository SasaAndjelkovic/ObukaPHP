<?php

class Manager extends BasicInformation implements PersonInformation {

	private $email;
	private $pass;
    
    public function __construct($id, $name, $email, $pass)
    {
		parent::__construct($id, $name);
		$this->email = $email;
		$this->pass = $pass;
    }

	public function getEmail() {
		return $this->email;
	}
	
	public function setEmail($email) {
		$this->email = $email;
	}
	
	public function getPass() {
		return $this->pass;
	}
	
	public function setPass($pass) {
		$this->pass = $pass;
	}
	
	public function getId() {
		return $this->id;
	}
	
	public function setId($id_variable) {
		$this->id = $id_variable;
	}
	
	public function getName() {
		return $this->name;
	}
	
	public function setName($name_variable) {
		$this->name = $name_variable;
	}
}