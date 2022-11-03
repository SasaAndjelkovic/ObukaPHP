<?php
require "../dbBroker.php";
require "../model/tim.php";


$status = Tim::getLast($conn);
if ($status) {
    echo $status->fetch_column();
} else {
    echo $status;
    echo 'Failed';
}
