<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Korpa</title>
</head>

<body>

    <h3>Proizvodi u korpi</h3>
    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Price</th>
                <th>Add to cart</th>
            </tr>

        </thead>
        <tbody>
            <?php
            foreach ($korpa as $pr) :
            ?>
                <tr>
                    <td><?php echo $pr['id']; ?></td>
                    <td><?php echo $pr['name']; ?></td>
                    <td><?php echo $pr['price']; ?></td>
                    <td>
                        <form action="" method="post">
                            <input type="hidden" name="id" value="<?php echo $pr['id']; ?>">
                            <input type="submit" name="submit" value="Add">
                        </form>
                    </td>

                </tr>
            <?php endforeach; ?>

        </tbody>
        <tfoot>
            <td colspan="2">Ukupno:</td>
            <td colspan="2"><?php echo $suma ?></td>
        </tfoot>
    </table>

</body>

</html>