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
     $AGE = 25;
     $a = 18; 
     $b = 34; 
     $c = $a + $b; 
     $d = $a*$b; 
     $f = $a/$b; 
     $g = $a % $b; 
     $i = "Pobitro Debnath";
  ?>
  <section>
    <div class="container mt-5">
      <div class="row mx-auto">
        <div class="col-md-5">
          <div class="card card-body">
          <h3> PHP Variables </h3>
          <ul class="list-group">
            <li class="list-group-item py-3">
              <?php echo "A variable starts with the $ sign, followed by the name of the variable";?>
            </li>
            <li class="list-group-item py-3">
            <?php echo"  A variable name must start with a letter or the underscore character"; ?>
            </li>
            <li class="list-group-item py-3">
             <?php echo " A variable name cannot start with a number";?>
            </li>
            <li class="list-group-item py-3">
            <?php echo "  A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )";?>
            </li>
            <li class="list-group-item py-3">
             <?php echo "Variable names are case-sensitive ($age and $AGE are two different variables)";?>
            </li>
          </ul>
          </div>
        </div>
        <div class="col-md-7 text-center">
         <div class="card">
          <div class="card-header">
            Oparator in PHP 
          </div>
          <div class="card-body">
            <p>
              Most importan and use bellow oparator's 
            </p>
            <table class="table table-bordered table-hover">
                <thead class="bg-primary text-white">
                  <tr>
                    <td> <?php echo "Operator"; ?> </td>
                    <td> <?php echo "Name";?>  </td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><?php echo "+ - * / % ** ";?></td>
                    <td><?php echo "Arithmetic";?></td>
                  </tr>
                  <tr>
                    <td><?php echo "= += -== *= /== %";?></td>
                    <td><?php echo "Assignment ";?></td>
                  </tr>
                  <tr>
                    <td><?php echo "== === != <> !== > < >== <= <=>";?></td>
                    <td><?php echo "Comparison";?></td>
                  </tr>
                  <tr>
                  <td><?php echo "and or xor && || !";?></td>
                  <td><?php echo "Logical";?></td>
                  </tr>
                </tbody>
            </table>
          </div>
         </div>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-dark mt-5">
     <div class="contianer">
        <div class="row">
          <div class="col-md-12">
            <h2 class="text-center text-white py-3"> <?php echo "Congraltution's Now we are see Demo Oparator's";?> </h2>
          </div>
        </div>
      </div>
  </section>
  <!-- ################ Opartor ############  -->
  <section class="mt-5">
    <div class="container">
      <div class="row mx-auto">
        <div class="col-md-12">
              <div class="card card-body">
              <table class="table table-bordered table-hover"> 
                  <thead class="bg-primary text-white text-center">
                    <tr>
                      <td><?php echo"Value";?></td>
                      <td><?php echo"Condition";?></td>
                      <td><?php echo"Result";?></td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><?php echo "a value is : $a, b value is : $b";?></td>
                      <td><?php echo"$a + $b";?></td>
                      <td><?php echo"$c";?></td>
                    </tr>
                    <tr>
                      <td><?php echo "a value is : $a, b value is : $b";?></td>
                      <td> <?php echo "$a*$b";?></td>
                      <td> <?php echo "$d";?></td>
                    </tr>
                    <tr>
                    <td><?php echo "a value is : $a, b value is : $b";?></td>
                      <td><?php echo"$a/$b";?></td>
                      <td><?php echo"$f";?></td>
                    </tr>
                    <tr>
                    <td><?php echo "a value is : $a, b value is : $b";?></td>
                      <td><?php echo"$a%$b";?></td>
                      <td><?php echo"$g";?></td>
                    </tr>
                    <tr>
                    <td><?php echo "a value is : $a, b value is : $b";?></td>
                      <td><?php echo"$a<$b";?></td>
                      <td><?php echo"B is gatter than to a ";?></td>
                    </tr>
                  </tbody>
              </table>
              </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ############# Footer ###########  -->
  <footer class="bg-primary">
    <div class="container text-center text-white py-2">
      <div class="row">
        <div class="col-md-12">
         All Cadidt To Shohan Sir, Creative IT   
        </div>
      </div>
    </div>
  </footer>
  <script href="assests/js/jquery-3.6.0.js"></script>
<script href="assests/js/bootstrap.bundle.js"></script>
</body>
</html>