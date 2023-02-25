<?php

require "../dbBroker.php";
require "../model/muzicar.php";

if(isset($_POST['id'])){
    $status = Muzicar::getById($_POST['id'], $conn);
    if($status){
        echo json_encode($status);
    } else{
        echo $status;
        echo "Failed";
    }
}

?>