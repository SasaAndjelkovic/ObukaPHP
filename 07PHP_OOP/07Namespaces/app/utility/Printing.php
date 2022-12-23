<?php
namespace Utility;

// ovako izgleda json 
// {
//   "id":"1",
//   "itemName":"Philips",
//   "price":"1200",
//   "category_id": "1"
// }

// preko trait-a mogu da je implentiram svuda
trait Printing{

    public function print($type="json")
    {
        if($type=="json"){
            $izlaz = "";
            foreach($this as $kljuc=>$vrednost){
                $izlaz.="'$kljuc':$vrednost, \r\n";
            }

            return "{ \r\n $izlaz }";
        }
    }
}

?>