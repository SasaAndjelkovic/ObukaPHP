<h2>Your input: </h2>
<p>
    <?php
    if ($nameErr || $email || $genderErr) {
        echo "<span class='error'>Enter required data </span>";
    } else {
        echo $name . "<br>";
        echo $email . "<br>";
        echo $comment . "<br>";
        echo $gender . "<br>";
    }

    ?>
</p>