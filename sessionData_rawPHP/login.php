<?php 
    // Session Data with login 
    session_start(); 

    if($_POST['email'] == 'pobitrodn@gmail.com' && $_POST['password'] ==  '123456')
    {
       $_SESSION['email']       = $_POST['email'];
       $_SESSION['password']    = $_POST['password'];

        echo 'Wellcome, your mail is'. ' '. $_SESSION['email'];
        
        echo "<br><br> <a href='logout.php'> Logout</a> ";
    }else {
        echo 'OOps Bro, Not match';
    }

?>