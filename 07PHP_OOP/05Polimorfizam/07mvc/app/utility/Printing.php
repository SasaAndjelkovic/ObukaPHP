<?php

namespace Utility;
// {
// "id":"1", 
// "itemName":"Philips",
// "price":"1200",
// "category_id":"1"
// }

trait Printing{
    public function print($type="json") {
        if($type=="json"){
            $izlaz = "";
            foreach($this as $kljuc=>$vrednost) {
                $izlaz.="'$kljuc':$vrednost, \r\n";
            }
        }
        return "{ \r\n $izlaz}";
    }
}

