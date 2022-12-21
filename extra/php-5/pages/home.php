<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="pages/style.css">
</head>
<body>
<U>
    <h3 style="text-align: center;color: red" > Dyanamic <b>DATA</b> Table </h3>
</U>
<table border="1" width="800">
    <tr>
        <th>ID </th>
        <th>Name</th>
        <th>Price</th>
        <th>Catagory</th>
        <th>Description</th>
        <th>photos</th>
    </tr>
    <?php foreach ( $products as $product){?>
        <tr>
            <td> <?php echo $product['id'];?> </td>
            <td> <?php echo $product['name'];?> </td>
            <td> <?php echo $product['price'];?> </td>
            <td> <?php echo $product['catagoray'];?></td>
            <td> <?php echo $product['description'];?> </td>
            <td> <?php echo $product['image'];?> </td>
        </tr>
    <?php }?>
</table>
</body>
</html>
