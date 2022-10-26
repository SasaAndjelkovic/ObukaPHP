<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <label for="name">Name: </label>
    <input type="text" name="name" id="name" placeholder="Enter your name: "><br>
    <!-- <span class="error">*<?php echo $nameErr ?></span><br> -->
    <label for="email">Email: </label>
    <input type="email" name="email" id="email" placeholder="Enter your email: "><br>
    <!-- <span class="error">=<?php echo $emailErr ?></span><br> -->
    <label for="comment">Comment: </label>
    <textarea name="comment" id="" cols="30" rows="10"></textarea> <br>
    <label>Gender: </label>
    <input type="radio" name="gender" id="m" value="male"> Male
    <input type="radio" name="gender" id="f" value="female"> Female <br>
    <!-- <span class="error">=<?php echo $genderErr ?></span><br> -->
    <input type="submit" value="Enter meeting">
</form>
<!-- default method je GET -->
<!-- <form action="welcome.php" method="POST"> -->