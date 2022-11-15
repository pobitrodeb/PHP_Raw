<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>class-2 </title>
    <link rel="stylesheet" href="assests/css/style.css">
    <link rel="stylesheet" href="assests/css/bootstrap.css">
    
    
</head>
<body>
   <?php 
    $age = 15; 
    if ($age >= 5 && $age >= 7) {
      echo "old"; 
    }
    elseif ($age >=8 && $age >=12) {
      echo "your boyes is urong furong"; 
    }
    elseif ($age >=13 && $age >=19) {
      echo "Uro Uro Vab asbe ei boyoshe"; 
    }
    elseif ($age >=21 && $age >=26) {
      echo "Depression Er ekta Vab asbe <br> Relationship e jaite mon chaibe "; 
    }
    elseif ($age >=27 && $age >=36) {
      echo "Biye korar jonno family chap dibe"; 
    }
    elseif ($age >=37 && $age >=46) {
      echo "Ki korlam jibone hisab kora surro hobe ekon"; 
    }
    elseif ($age >=47 && $age >=58) {
      echo "Pola Miya niya besto "; 
    }
    elseif ($age >=59 && $age >=100) {
      echo "Congratulattion You are Grand Father"; 
    }
   else {
    echo "Eitta kono Boys hoilo: $age";
   }
  ?> 
  <script href="assests/js/jquery-3.6.0.js"></script>
<script href="assests/js/bootstrap.bundle.js"></script>
</body>
</html>