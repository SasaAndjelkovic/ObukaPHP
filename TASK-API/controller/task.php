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
    } elseif ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
        $query = "DELETE FROM tasks WHERE id=$taskid";
        $result = $conn->query($query);

        $num_rows = $conn->affected_rows;
        if ($num_rows === 0) {
            $response = new Response();
            $response->setHttpStatusCode(404);
            $response->setSuccess(false);
            $response->addMessage("Task not found.");
            $response->send();
            exit;
        }
        $response = new Response();
        $response->setHttpStatusCode(200);
        $response->setSuccess(true);
        $response->addMessage("Task deleted.");
        $response->send();
        exit;
    } elseif ($_SERVER['REQUEST_METHOD'] === 'PATCH') {

        //ovde pisemo kod za patch
        //treba da pronadjemo element sa tim id-jem
        //treba da azuriramo samo one podatke koje je korisnik uneo

        if ($_SERVER['CONTENT_TYPE'] !== 'application/json') {  //necu da primam tekst, samo json
            $response = new Response();
            $response->setHttpStatusCode(400);
            $response->setSuccess(false);
            $response->addMessage('Content type header not set to JSON');
            $response->send();
            exit;
        }

        $rawPatchData = file_get_contents('php://input'); //ovde prosledjujemo podakte, cita se body, na php nacin
        if (!$jsonData = json_decode($rawPatchData)) {    //da li moze da se dekoduje podatak
            $response = new Response();
            $response->setHttpStatusCode(400);
            $response->setSuccess(false);
            $response->addMessage("Request body is not valid JSON");
            $response->send();
            exit;
        }

        $query = "SELECT * FROM tasks WHERE id=$taskid";  //da li ima id u bazi
        $result = $conn->query($query);    //stari objekat

        $rowCount = $result->num_rows;
        if ($rowCount === 0) {
            $response = new Response();
            $response->setHttpStatusCode(404);
            $response->setSuccess(false);
            $response->addMessage("No task found to update");
            $response->send();
            exit;
        }

        $title_update = false;
        $description_update = false;
        $deadline_update = false;
        $completed_update = false;

        $queryFields = "";
        if (isset($jsonData->title)) {    //proveravamo preko objekta (zato sto je sad $jsonData) a ne preko asocijativnog niza
            $title_update = true;
            $queryFields .= "title='$jsonData->title',";
        }
        if (isset($jsonData->description)) {
            $description_update = true;
            $queryFields .= "description='$jsonData->description',";
        }
        if (isset($jsonData->deadline)) {
            $deadline_update = true;
            $queryFields .= "deadline='$jsonData->deadline',";
        }
        if (isset($jsonData->completed)) {
            $completed_update = true;
            $queryFields .= "completed='$jsonData->completed',";
        }

        if ($title_update === false && $description_update === false && $deadline_update === false && $completed_update === false) {
            $response = new Response();
            $response->setHttpStatusCode(400);
            $response->setSuccess(false);
            $response->addMessage("No task fields provided");
            $response->send();
            exit;
        }
        $queryFields = rtrim($queryFields, ",");   //trimovanje sa desne strane 
//         var_dump($queryFields);
        $queryString = "UPDATE tasks SET $queryFields WHERE id=$taskid";
        $result2 = $conn->query($queryString);    //azuriram $result

//         //sta ako nije lepo azuriran red u tabeli
        $row = $result->fetch_assoc();

        $task = new Task($row['id'], $row['title'], $row['description'], $row['deadline'], $row['completed']);

        $queryFieldsCheck = "";
        if ($title_update) {
            $task->setTitle($jsonData->title);
            $queryFieldsCheck .= "title='{$task->getTitle()}' AND ";  //posle AND je potreban space
        }
        if ($description_update) {
            $task->setDescription($jsonData->description);
            $queryFieldsCheck .= "description='{$task->getDescription()}' AND ";
        }
        if ($deadline_update) {
            $task->setDeadline($jsonData->deadline);
            $queryFieldsCheck .= "deadline='{$task->getDeadline()}' AND ";
        }
        if ($completed_update) {
            $task->setCompleted($jsonData->completed);
            $queryFieldsCheck .= "completed='{$task->getCompleted()}' AND ";
        }
        $queryFieldsCheck .= "id='{$task->getID()}'"; // zbog ove linije ne treba trimovanje

        $query3 = "SELECT * FROM tasks WHERE $queryFieldsCheck";
        $result3 = $conn->query($query3);

        $rowCount = $result3->num_rows;
        if ($rowCount === 0) {
            $response = new Response();
            $response->setHttpStatusCode(404);
            $response->setSuccess(false);
            $response->addMessage("Task not updated - given values must be the same as the stored values");
            $response->send();
            exit;
        }

//         //potrebno je napisati upit koji proverava da li postoji element sa: id, deadline, completed, title, description

        $result4 = $conn->query("SELECT * FROM tasks WHERE id=$taskid");  //uvek provera row kada se vrsi selekcija, azuriran je r2, a ispisan r4
        $rowCount = $result4->num_rows;
        if ($rowCount === 0) {
            $response = new Response();
            $response->setHttpStatusCode(404);
            $response->setSuccess(false);
            $response->addMessage("No task found");
            $response->send();
            exit;
        }

        $row = $result4->fetch_assoc();
        $task = new Task($row['id'], $row['title'], $row['description'], $row['deadline'], $row['completed']);

        $taskArray[] = $task->returnTaskArray();
        $returnData = array();
        $returnData['row_returned'] = $rowCount;
        $returnData['task'] = $taskArray;

        //konacno uspesno apdejtovanje
        $response = new Response();         
        $response->setHttpStatusCode(200);
        $response->setSuccess(true);
        $response->addMessage('Task updated');
        $response->setData($returnData);
        $response->send();
        exit;

    } else {
        $response = new Response();
        $response->setHttpStatusCode(405);
        $response->send();
        exit;
    }

} elseif (isset($_GET['completed'])) {
    $completed = $_GET['completed'];

    if ($completed !== 'Y' && $completed !== 'N') {
        $response = new Response();
        $response->setHttpStatusCode(400);   //greska u upitu
        $response->setSuccess(false);
        $response->addMessage("Completed filter must be Y or N");
        $response->send();
        exit;
    }
    if ($_SERVER['REQUEST_METHOD'] === "GET") {
        $query = "SELECT * FROM tasks WHERE completed='$completed'";
        $result = $conn->query($query);
        $rowCount = $result->num_rows;
    //     } else {
    //     $response = new Response();
    //     $response->setHttpStatusCode(405);
    //     $response->setSuccess(false);
    //     $response->addMessage("Request method not allowed");
    //     $response->send();
    //     exit;
        if ($rowCount === 0) {
            $response = new Response();
            $response->setHttpStatusCode(404);
            $response->setSuccess(false);
            $response->addMessage("No task found");
            $response->send();
            exit;
        }

        while ($row = $result->fetch_assoc()) {
            $task = new Task($row['id'], $row['title'], $row['description'], $row['deadline'], $row['completed']);
            $taskArray[] = $task->returnTaskArray();
        }

        $returnData = array();
        $returnData['row_returned'] = $rowCount;
        $returnData['tasks'] = $taskArray;
        $response = new Response();
        $response->setHttpStatusCode(200);
        $response->setSuccess(true);
        $response->setData($returnData);
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
} elseif (empty($_GET)) {
    //get all // get 1
    //vracamo sve // vracamo 1
    //petlja // nema petlje
    //200 ok // 404
    if ($_SERVER['REQUEST_METHOD'] === "GET") {
        $query = "SELECT * FROM tasks";
        $result = $conn->query($query);

        $rowCount = $result->num_rows;
        if ($rowCount === 0) {
            $response = new Response();
            $response->setHttpStatusCode(404);
            $response->setSuccess(false);
            $response->addMessage("Tasks not found!");
            $response->send();
            exit;
        }

        while ($row = $result->fetch_assoc()) {
            $task = new Task($row['id'], $row['title'], $row['description'], $row['deadline'], $row['completed']);
            $taskArray[] = $task->returnTaskArray();
        }
        $returnData = array();
        $returnData['row_returned'] = $rowCount;
        $returnData['tasks'] = $taskArray;
        $response = new Response();
        $response->setHttpStatusCode(200);
        $response->setSuccess(true);
        $response->setData($returnData);
        $response->send();
    } elseif ($_SERVER['REQUEST_METHOD'] === "POST") {
        //da li je application/JSON
        //da li je JSON format
        //da li sva OBAVEZNA polja popunjna
        //pogresan tim podataka za objekat koji prosledjuje

        if ($_SERVER['CONTENT_TYPE'] !== "application/json") {
            $response = new Response();
            $response->setHttpStatusCode(400);
            $response->setSuccess(false);
            $response->addMessage("Content type header not set to JSON");
            $response->send();
            exit;
        }  
        
        $rawPostData = file_get_contents('php://input');
        if (!$jsonData = json_decode($rawPostData)) {
            $response = new Response();
            $response->setHttpStatusCode(400);
            $response->setSuccess(false);
            $response->addMessage('Request body is not valid JSON');
            $response->send();
            exit;
        }

          //provera da li su setovana obavezna polja
          if (!isset($jsonData->title) || !isset($jsonData->description) || !isset($jsonData->completed)) {
            $response = new Response();
            $response->setHttpStatusCode(400);
            $response->setSuccess(false);
            if (!isset($jsonData->title))
                $response->addMessage('Title filed is mandatory and must be provided');
            if (!isset($jsonData->description))
                $response->addMessage('Description filed is mandatory and must be provided');
            if (!isset($jsonData->completed))
                $response->addMessage('Completed filed is mandatory and must be provided');
            $response->send();
            exit;
        }

        $newTask = new Task(
            null,
            $jsonData->title,
            $jsonData->description,
            !isset($jsonData->deadline) ? null : $jsonData->deadline,
            $jsonData->completed
        );

        $title = $newTask->getTitle();
        $description = $newTask->getDescription();
        $deadline = $newTask->getDeadline();
        $completed = $newTask->getCompleted();
        if ($deadline == null)
            $query = "INSERT INTO tasks (title, description, deadline, completed) 
            VALUES ('$title', '$description', null,'$completed')";
        else
            $query = "INSERT INTO tasks (title, description, deadline, completed) 
            VALUES ('$title', '$description', '$deadline','$completed')";
            
        $result = $conn->query($query);

        $rowCount = $conn->affected_rows;
        if ($rowCount === 0) {
            $response = new Response();
            $response->setHttpStatusCode(500);
            $response->setSuccess(false);
            $response->addMessage("Task not saved");
            $response->send();
            exit;
        }

        $lastTaskId = $conn->insert_id;  //id na osnovu rezultata
        $query2 = "SELECT * FROM tasks WHERE id=$lastTaskId";
        $result2 = $conn->query($query2);
        $rowCount = $result2->num_rows;

        if ($rowCount == 0) {
            $response = new Response();
            $response->setHttpStatusCode(500);
            $response->setSuccess(false);
            $response->addMessage("Failed to retive task after creation");
            $response->send();
            exit;
        }

        $row = $result2->fetch_assoc();
        $task = new Task($row['id'], $row['title'], $row['description'], $row['deadline'], $row['completed']);

        $returnData = array();
        $returnData['rows_returned'] = $rowCount;
        $returnData['task'] = $task->returnTaskArray();

        $response = new Response();
        $response->setHttpStatusCode(200);
        $response->setSuccess(true);
        $response->addMessage("Task created");
        $response->setData($returnData);
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
