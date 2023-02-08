<?php

require_once("../model/Response.php");

$response = new Response();
$response->setSuccess(true);
$response->setHttpStatusCode(200);
$response->addMessage("Success");
$response->send();
