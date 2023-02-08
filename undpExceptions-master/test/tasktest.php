<?php

require_once("../model/Task.php");

$task = new Task(1, "Title 1", "Desc 1", "01/01/2023 12:00", "N");
header("Content-type: application/json;charset=utf-8");
echo json_encode($task->returnTaskArray());
