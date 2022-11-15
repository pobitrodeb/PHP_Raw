<?php 

    $dbConnect = mysqli_connect('localhost', 'root', '', 'sms'); 

    $id = $_GET['id'];

    $sql = "DELETE FROM student_info WHERE id=$id"; 

    $delete = mysqli_query($dbConnect, $sql);

    if($delete)
    {
        echo 'Delete';
    }
    else{
        echo 'faild'; 
    }
    
?>