<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog</title>
</head>

<body>

    <h3>Proizvodi</h3>

    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($search_niz as $pr) :
            ?>
                <tr>
                    <td><?php echo $pr['id'] ?></td>
                    <td><?php echo $pr['name'] ?></td>
                    <td><?php echo $pr['price'] ?></td>
                </tr>
            <?php endforeach; ?>
            <!-- <tr>
                <td>2</td>
                <td>Keyboard</td>
                <td>150</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Monitor</td>
                <td>400</td>
            </tr> -->
        </tbody>

    </table>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="text" name="name" id="name" placeholder="Search by name: ">
        <br>
        <label for="low-price">Price:</label><br>
        <input type="text" name="low-price" id="low-price" placeholder="Lowest: ">
        <input type="text" name="high-price" id="high-price" placeholder="Highest: "><br>
        <input type="submit" name="reset" id="reset" value="Reset search">
        <input type="submit" value="Search" name="search">
    </form>
</body>

</html>