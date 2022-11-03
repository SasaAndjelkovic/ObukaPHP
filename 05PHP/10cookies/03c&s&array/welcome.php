<?php

echo "Dobrodosao, " . $_SESSION['name'] . "<br>";

echo "<a href='logout.php'> Log out </a";

if (isset($_COOKIE['userkuki'])) {
    $userD = unserialize($_COOKIE['userkuki']);
    echo $userD['name'];
}


// foreach ($userDeserijalizacija as $element) {
//     echo "<script>
//         alert('$element');
//         </script>
//     ";
// }
