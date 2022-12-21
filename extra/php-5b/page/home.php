<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> home | title </title>
</head>
<body>
  <h1> Dyanamic Table </h1>
    <table border="1" width="1200">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Band</th>
            <th>Price</th>
            <th>Description</th>
            <th>Photo</th>
        </tr>
        <?php foreach ($monitors as $item){?>
        <tr>
            <td><?php echo $item['id']?></td>
            <td><?php echo $item['name']?></td>
            <td><?php echo $item['band']?></td>
            <td><?php echo $item['price']?></td>
            <td><?php echo $item['description']?></td>
            <td><?php echo $item['image']?></td>
        </tr>
        <?php }?>
    </table>
</body>
</html>