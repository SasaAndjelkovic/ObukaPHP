<?php

class Ocena{

    protected Studentt $student;
    protected Predmet $predmet;
    protected Profesor $profesor;
    protected int $ocena;
    protected string $datum;

    public function __construct(Studentt $student,Predmet $predmet,Profesor $prof, int $ocena, string $dat)
    {
        $this->student = $student;
        $this->predmet = $predmet;
        $this->profesor = $prof;
        $this->ocena = $ocena;
        $this->datum = $dat;
    }

	/**
	 * @return Studentt
	 */
	public function getStudent(): Studentt {
		return $this->student;
	}
	
	/**
	 * @return Predmet
	 */
	public function getPredmet(): Predmet {
		return $this->predmet;
	}
	
	/**
	 * @return Profesor
	 */
	public function getProfesor(): Profesor {
		return $this->profesor;
	}
	
	/**
	 * @return int
	 */
	public function getOcena(): int {
		return $this->ocena;
	}
	
	/**
	 * @return string
	 */
	public function getDatum(): string {
		return $this->datum;
	}

	/**
	 * @param Studentt $student 
	 * @return self
	 */
	public function setStudent(Studentt $student): self {
		$this->student = $student;
		return $this;
	}
	
	/**
	 * @param Predmet $predmet 
	 * @return self
	 */
	public function setPredmet(Predmet $predmet): self {
		$this->predmet = $predmet;
		return $this;
	}
	
	/**
	 * @param Profesor $profesor 
	 * @return self
	 */
	public function setProfesor(Profesor $profesor): self {
		$this->profesor = $profesor;
		return $this;
	}
	
	/**
	 * @param int $ocena 
	 * @return self
	 */
	public function setOcena(int $ocena): self {
		$this->ocena = $ocena;
		return $this;
	}
	
	/**
	 * @param string $datum 
	 * @return self
	 */
	public function setDatum(string $datum): self {
		$this->datum = $datum;
		return $this;
	}
}

?>