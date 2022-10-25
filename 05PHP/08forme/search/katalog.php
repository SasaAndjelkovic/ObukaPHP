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
            foreach ($niz_proizvoda as $pr) :
            ?>
                <tr>
                    <td><? php ?></td>
                    <td>Laptop</td>
                    <td>1500</td>
                </tr>
            <?php
            endforeach;
            ?>
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
        <input type="submit" value="Search" name="search" id="">
    </form>
</body>

</html>