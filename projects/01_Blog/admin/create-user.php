<?php include 'master/database.php'; ?>
<?php 
        if(isset($_POST['submit']))
        {
            $fullNamev       = $_POST['fullName'];
            $userName       = $_POST['userName'];
            $email          = $_POST['email'];
            $password       = md5($_POST['password']);
            $role           = $_POST['ueserRole'];
        }

        

        $userCheck = "SELECT userName, email FROM users WHERE userName = '$userName' OR email = '$email' ";
        $user_query = mysqli_query($dbConnet, $userCheck);
        $user_count = mysqli_num_rows($user_query);

        if($user_count > 0)
        {
            echo 'User and Email alrreay is taken'; 
        }
        else{
            $userInsert = "INSERT INTO users(fullName, userName, email, password, role) 
            VALUES ('$fullNamev', '$userName', '$email', '$password', '$role')"; 

            $userResult = mysqli_query($dbConnet, $userInsert); 

            if($userResult)
            {
                echo 'New User Create Successfully';
            }
        }

     
  ?>