<?php

require __DIR__ . '/inc/header.php';

$req = strtoupper($_SERVER["REQUEST_METHOD"]);

if ($req == "get") {
    require __DIR__ . '/inc/get.php';
} elseif ($req == "post") {
    require __DIR__ . '/inc/post.php';
    require __DIR__ . '/inc/response.php';
}

require __DIR__ . '/inc/footer.php';

?>


<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meeting page</title>
    <style>
        .error {
            color: red;
            font-size: small;
        }
    </style>
</head>

<body>
    
  

</body>

</html> -->