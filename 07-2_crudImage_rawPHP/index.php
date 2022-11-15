<?php include'./pages/header.php'?>

<?php
    $dbConnect = mysqli_connect('localhost', 'root', '', 'crudImage');
   
   if(isset($_POST['submit']))
   {
        $name      = $_FILES['image']['name']; 
        $location  = $_FILES['image']['tmp_name']; 
        $size      = $_FILES['image']['size']; 
        $file_expo = explode('.', $name);
        $fileLowerr = strtolower(end($file_expo));
        $fileApprove = array('png', 'jpg');
        $rename        = date('Y'). ' '.rand(9,999). '.'.$fileLowerr;
        $upload        = move_uploaded_file($location, 'assets/img/'. $rename); 
        
        
        if(in_array($fileLowerr, $fileApprove, $rename))
        {
            if($size > 1000000 )
            {
                    if($upload)
            {
                $imageInsert = "INSERT INTO image (image) VALUES ('$rename')";
                mysqli_query($dbConnect, $imageInsert); 
                if($imageInsert)
                {
                    echo 'Image insert successfully'; 
                }
                else
                { 
                    echo 'Vai Image den';
                }
            }
            else{ 
                echo ' no found'; 
            }

            }
            else {
                echo 'Not allow gratter than 1 mb'; 
            }
        }else{
            echo 'Image must be png or jpg';
        }
   }
?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card card-body">
                    <h4 class="text-center"> File Upload </h4>
                        <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
                            <input type="file" class="form-control my-5" name="image">
                            <input type="submit" class="btn btn-success" name="submit" value="Upload Image">
                        </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
    $dbConnect = mysqli_connect('localhost', 'root', '', 'crudImage');
    $sql = "SELECT * FROM image";
    $result = mysqli_query($dbConnect, $sql); 
     
    echo '<table border="1">';
    while($imageDetail = mysqli_fetch_assoc($result))
    {
        ?>
        <tr>
            <td><?php echo $imageDetail['id'] ?></td>
            <td style="height:50px;";>
                <img style="width: 250px; height:150px;" src="assets/img/<?php echo $imageDetail['image'] ?>" alt="">
            </td>
            <td>
                <a href="edit.php?id=<?php echo $imageDetail['id']?>" class="m-4">Eidt </a>
                <a href="delete.php?id=<?php echo $imageDetail['id'];?>&img_delete=<?php echo $imageDetail['image']?>" onclick="return confirm('Are you sure delete this?');">Delte</a>
            </td>
        </tr>
       <?php
    }
    echo '</table>';
?>

<?php include'./pages/footer.php'?>