<?php

require "db.php";
require "../model/Response.php";
require "../model/Task.php";

$conn = DB::connectDB();

// tasks GET
// tasks POST
// tasks/1 PUT/PATCH
// tasks/1 GET
// tasks/1 DELETE

// tasks/1 GET
if (isset($_GET['taskid'])) {
    $taskid = $_GET['taskid'];

    if(!is_numeric($taskid) || $taskid ==''){
        $response = new Response();
        $response->setHttpStatusCode(400);
        $response->setSuccess(false);
        $response->addMessage("Task ID cannot be blank or must be numeric");
        $response->send();
        exit;
    }
    
    if ($_SERVER['REQUEST_METHOD'] === "GET") {   //provera koji se metod koristis
    //     //var_dump($_GET['taskid']);
        $qeury = "SELECT * FROM tasks WHERE id=$taskid";
        $result = $conn->query($qeury);

        $rowCount = $result->num_rows;
        if($rowCount == 0){
            $response = new Response();
            $response->setHttpStatusCode(404);
            $response->setSuccess(false);
            $response->addMessage("Task not found");
            $response->send();
            exit;
        }

        while($row = $result->fetch_assoc()){
            $task = new Task($row['id'], $row['title'], $row['description'], $row['deadline'], $row['completed']);
            $taskArray[] = $task->returnTaskArray();
        }

        $returnData = array();
        $returnData['row_returned'] = $rowCount;
        $returnData['tasks'] = $taskArray;

        $response = new Response();
        $response->setHttpStatusCode(200);
        $response->setSuccess(true);
        $response->addMessage($returnData);
        $response->send();
        exit;

    } else {
        $response = new Response();
        $response->setHttpStatusCode(405);
        $response->setSuccess(false);
        $response->addMessage("Request method not allowed");
        $response->send();
        exit;
    }
}