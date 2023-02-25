<?php

class Avatar {

    private $description;
	private $avatarID;
	private $avatarName;
    
    public function __construct($avatarID, $avatarName, $description) {
        $this->description = $description;
        $this->avatarID = $avatarID;
        $this->avatarName = $avatarName;
    }
	
	public function getDescription() {
        return $this->description;
	}
	
	public function setDescription($description) {
        $this->description = $description;
	}
	
	public function getId() {
        return $this->avatarID;
	}
	
	public function setId($id_variable) {
        $this->avatarID=$id_variable;
	}
	
	public function getName() {
        return $this->avatarName;
	}
	
	public function setName($name_variable) {
        $this->avatarName = $name_variable;
	}

	public static function getAvatar(mysqli $conn)
    {
        $q = "SELECT * FROM avatar";
        return $conn->query($q);
    }

}