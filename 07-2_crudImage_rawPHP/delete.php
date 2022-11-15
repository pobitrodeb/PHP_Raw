<?php include'./pages/header.php'?>

<?php
//Image Delete 
    $dbConnect = mysqli_connect('localhost', 'root', '', 'crudImage');
    $id = $_GET['id'];
    $image_delete = $_GET['img_delete'];

    $sql = "DELETE image FROM image WHERE id='$id' ";
    $delete = mysqli_query($dbConnect, $sql);

    if($delete){
        unlink('assets/img/'.$image_delete); 
        echo 'delete success'; 
    }else{
        echo 'delete hoy nai'; 
    }
?>

<?php include'./pages/footer.php'?>