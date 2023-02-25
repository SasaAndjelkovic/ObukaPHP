<?php

require "../dbBroker.php";
require "../model/muzicar.php";

if(isset($_POST['id'])){
    $status = Muzicar::deleteById($_POST['id'], $conn);
    if($status){
        echo 'Success';
    } else{
        echo $status;
        echo "Failed";
    }
}

?>