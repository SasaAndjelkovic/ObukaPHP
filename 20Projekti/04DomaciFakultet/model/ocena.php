<?php

class Ocena{

    protected StudentDom $student;
    protected Predmet $predmet;
    protected Profesor $profesor;
    protected int $ocena;
    protected string $datum;

    public function __construct(StudentDom $student,Predmet $predmet,Profesor $prof, int $ocena, string $dat)
    {
        $this->student = $student;
        $this->predmet = $predmet;
        $this->profesor = $prof;
        $this->ocena = $ocena;
        $this->datum = $dat;
    }

	public function getStudent(): StudentDom {
		return $this->student;
	}
	
	public function getPredmet(): Predmet {
		return $this->predmet;
	}
	
	public function getProfesor(): Profesor {
		return $this->profesor;
	}
	
	public function getOcena(): int {
		return $this->ocena;
	}
	
	public function getDatum(): string {
		return $this->datum;
	}

	public function setStudent(StudentDom $student): self {
		$this->student = $student;
		return $this;
	}
	
	public function setPredmet(Predmet $predmet): self {
		$this->predmet = $predmet;
		return $this;
	}
	
	public function setProfesor(Profesor $profesor): self {
		$this->profesor = $profesor;
		return $this;
	}
	
	public function setOcena(int $ocena): self {
		$this->ocena = $ocena;
		return $this;
	}
	
	public function setDatum(string $datum): self {
		$this->datum = $datum;
		return $this;
	}
}

?>