<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class-6</title>
    <link rel="stylesheet" href="assests/css/style.css">
    <link rel="stylesheet" href="assests/css/bootstrap.css">
    
    
</head>
<body>
  <?php 
    $product = [
      $first_product = [
        'name'      => '1st Product Name ', 
        'id'        => 414, 
        'price'     => '7458'
      ],
      $secound_product = [
        'name'      => '2nd Product Name ', 
        'id'        => 48545, 
        'price'     => '56663'
      ]
    ];
    foreach($first_product as $products){
      echo $products."<br>";
     }
  ?>
<script href="assests/js/jquery-3.6.0.js"></script>
<script href="assests/js/bootstrap.bundle.js"></script>
</body>
</html>