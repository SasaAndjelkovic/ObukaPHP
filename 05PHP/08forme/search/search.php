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
            foreach($search_proizvodi as $pr):
        ?>
        <tr>
            <td><?php echo $pr['id'];?></td>
            <td><?php echo $pr['name'];?></td>
            <td><?php echo $pr['price'];?></td>
        </tr>
        <?php endforeach;?>

    </tbody>
</table>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <input type="text" name="name" id="name" placeholder="Search by name: ">
    <input type="submit" value="Search" name="search">

</form>
    
</body>
</html>