<?php

abstract class Osoba
{
    abstract public function pozdrav();
}

interface Pozdrav
{
    public function interfacePoz();
}

class Srbin extends Osoba implements Pozdrav
{
    public function pozdrav()
    {
        return "Zdravo!";
    }

    public function interfacePoz(){
        return "Zdravo iz interfejsa";
    }
}

class Englez extends Osoba implements Pozdrav
{
    public function pozdrav()
    {
        return "Hello";
    }
    public function interfacePoz(){
        return "Hello from interface";
    }

}

class Francuz extends Osoba implements Pozdrav
{
    public function pozdrav()
    {
        return "Bonjour!";
    }
    public function interfacePoz(){
        return "Bonjour de l'interface";
    }
}

class Amerikanac extends Osoba implements Pozdrav
{
    public function pozdrav()
    {
        return 'Hi!';
    }
    public function interfacePoz(){
        return "Hi from interface";
    }
}
$srb = new Srbin();
$eng = new Englez();
$fr = new Francuz();

// echo $srb->pozdrav();
// echo "<br>";
// echo $eng->pozdrav();
// echo "<br>";
// echo $fr->pozdrav();

function pozdravi(Osoba $neko){
    //ne prosledjujemo objekat new Osoba()
    //prosledjujemo objekat koji nasledjuje osobu
    echo $neko->pozdrav();
    echo "<br>";
}

function interfacePozdrav(Pozdrav $poz){//parametar tipa Pozdrav
    echo $poz->interfacePoz();
    echo "<br>";
}

pozdravi($srb);
interfacePozdrav($eng);
pozdravi(new Amerikanac());



