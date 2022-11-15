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
<section>
<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow">
          <div class="container">
          <a class="navbar-brand" href="">LOGO</a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="registerForm.php">Register</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="registerForm.php">Login</a>
                    </li>
                </ul>
          </div>
        </nav>
      <div class="container mt-2">
      <div class="card">
            <div class="card-title">
                <h3 class="text-center"> Form Submit Result </h3>
            </div>
        </div>
      </div>
</section>
    <!-- ####################### FORM ###################  -->
    <div class="container mt-3">
        <div class="card">
            <div class="card-body">
            <?php 
                    if(empty($_POST['fname']))
                    {
                       $name_error = "Please Enter your Full Name"; 
                       header('location: registerForm.php?$name_error='.$name_error);
                    }
                    elseif(empty($_POST['mail'])){
                        $mail_error = "Please Enter your mail address";
                        $old_full_name = $_POST['fname'];
                        header('location: registerForm.php?mail_error='.$mail_error.'&old_full_name='.$old_full_name);
                    }
                    elseif(!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)){
                        $invalid_mail_error = "Please Enter your valid email address";
                        $old_full_name = $_POST['fname'];
                        header('location: registerForm.php?invalid_mail_error='.$invalid_mail_error.'&old_full_name='.$old_full_name);
                    }
                    elseif(empty($_POST['age'])){
                        echo 'please Provide Age';
                    }
                    elseif(!filter_var($_POST['age'], FILTER_VALIDATE_INT)){
                            echo 'Plasease Porvide Valid Age';
                    }
                    elseif(empty($_POST['password'])){
                       echo 'plase Enter your Password'; 
                    }
                    elseif(empty($_POST['confirm_password'])){
                       echo 'plasae Enter your confirm Password'; 
                    }
                    
                    else
                    {
                        print_r ($_POST);
                    }
            ?>
            </div> 
        </div>
    </div>
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
