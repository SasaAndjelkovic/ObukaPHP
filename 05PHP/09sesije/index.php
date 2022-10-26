<?php

require __DIR__ . '/inc/header.php';

$req = strtoupper($_SERVER["REQUEST_METHOD"]);

if($req == "GET"){
    require __DIR__ . '/inc/get.php';
}elseif($req == "POST"){
    require __DIR__.'/inc/post.php';
    require __DIR__.'/inc/response.php';
}

require __DIR__ . '/inc/footer.php';
?>