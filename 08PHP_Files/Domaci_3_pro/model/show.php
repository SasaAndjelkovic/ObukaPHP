<?php

class Show  {

    private $showID;
    private $showName;
    private $author;
    private $description;
    private $IDAvatar;
    
    public function __construct($showID, $showName, $description, $author, $IDAvatar) {
        $this->description = $description;
        $this->author = $author;
        $this->IDAvatar = $IDAvatar;
        $this->showID = $showID;
        $this->showName = $showName;
    }
	
	public function getDescription() {
        return $this->description;
	}
	
	public function setDescription($description) {
        $this->description = $description;
	}
	
	public function getId() {
        return $this->showID;
	}
	
	public function setId($id_variable) {
        $this->showID=$id_variable;
	}
	
	public function getName() {
        return $this->showName;
	}
	
	public function setName($name_variable) {
        $this->showName = $name_variable;
	}
 
	public function setAuthor($author) {
		$this->author = $author;
	}

	public function getAuthor() {
		return $this->author;
	}

    public function getIDAvatar() {
		return $this->IDAvatar;
	}

	public function setIDAvatar($IDAvatar): self {
		$this->IDAvatar = $IDAvatar;
		return $this;
	}

	public static function getAll(mysqli $conn)
    {
        $q = "SELECT showID, showName, showth.description, author, avatarName FROM showth JOIN avatar 
        ON showth.IDAvatar = avatar.avatarID";
        return $conn->query($q);
    }

	public static function add($showName, $description, $author, $avatarID, $conn)
    {
        $q = "INSERT INTO showth(showName, description, author, IDAvatar) VALUES('$showName', '$description', '$author', $avatarID)";
        return $conn->query($q);
    }

	public static function update($showID, $showName, $description, $author, $avatarID, $conn)
    {
        $q = "UPDATE showth SET showName='$showName', showth.description='$description', author='$author', IDAvatar=$avatarID WHERE showID=$showID";
        return $conn->query($q);
    }

    public static function deleteById($showID, mysqli $conn)
    {
        $q = "DELETE FROM showth WHERE showID=$showID";
        return $conn->query($q);
    }

    public static function getAllSort(mysqli $conn)
    {
        $q = "SELECT showID, showName, showth.description, author, avatarName FROM showth JOIN avatar 
        ON showth.IDAvatar = avatar.avatarID ORDER BY showName ASC";
        return $conn->query($q);
    }

}