<?php

require_once("../model/Response.php");

$response = new Response();
$response->setSuccess(false);
$response->setHttpStatusCode(404);
$response->addMessage("Error");
$response->send();