<?php
require "../dbBroker.php";
require  "../model/tim.php";

if(isset($_POST['timID'])){
    
    $status = Tim::deleteById($_POST['timID'], $conn);
    if($status){
        echo 'Success';
    }else{
        echo 'Failed';
    }
}
?>