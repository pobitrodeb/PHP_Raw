<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow">
          <div class="container">
          <a class="navbar-brand" href="index.php">LOGO</a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="registerForm.php">Register</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                </ul>
          </div>
        </nav>
<!-- ####################### FORM ###################  -->
<div class="container mt-2">
  <div class="row">
    <div class="col-md-6 m-auto">
    <div class="card mb-3">
          <div class="card-header text-center bg-info">  <h3> Register Form  </h3></div>
            <div class="card-body">
              <form action="registser_result.php" method="POST">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Full Name</label>
                    <input type="text" class="form-control" name="fname" id="" placeholder="Enter Your Full Name" value="<?php 
                      if(isset($_GET['old_full_name'])){
                        echo $_GET['old_full_name'];
                      }
                    ?>">
                   <?php if(isset($_GET['$name_error'])):?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      <strong>
                      <!-- <?php 
                        if(isset($_GET['$name_error'])){
                          echo $_GET['$name_error'];
                        }
                         ?> -->
                         <?=$_GET['$name_error']?>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                     
                    </div>
                    <?php endif;?>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email Address </label>
                    <input type="text" class="form-control" name="mail" id="" placeholder="Enter Your Mail">
                    <?php if(isset($_GET['mail_error'])):?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      <strong>
                         <?=$_GET['mail_error']?>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <?php endif;?>
                    <?php if(isset($_GET['invalid_mail_error'])):?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      <strong>
                         <?=$_GET['invalid_mail_error']?>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <?php endif;?>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Age</label>
                    <input type="number" class="form-control" name="age" id="" placeholder="Enter Your Age">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" class="form-control" name="password" id="" placeholder="Enter Your Password">
                  </div> 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Confirm Password</label>
                    <input type="password" class="form-control" name="confirm_password" id="" placeholder="Enter Your Password">
                  </div> 
                  <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
        </div>
    </div>
  </div>
</div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>