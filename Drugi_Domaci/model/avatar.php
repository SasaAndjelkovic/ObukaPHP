<?php

class Avatar extends BasicInformation implements TheaterInformation {

    private $description;
    
    public function __construct($id, $name, $description) {
        parent::__construct($id, $name);
        $this->description = $description;
    }
	
	public function getDescription() {
        return $this->description;
	}
	
	public function setDescription($description) {
        $this->description = $description;
	}
	
	public function getId() {
        return $this->id;
	}
	
	public function setId($id_variable) {
        $this->id=$id_variable;
	}
	
	public function getName() {
        return $this->name;
	}
	
	public function setName($name_variable) {
        $this->name = $name_variable;
	}
}