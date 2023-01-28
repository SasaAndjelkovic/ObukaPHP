
<?php

trait Obrada{

    public function konvertujUNiz(){
        $niz = array();
        foreach($this as $kljuc=>$vrednost){
            $niz[$kljuc] = $vrednost;
        }
        return $niz;
    }
}

?>