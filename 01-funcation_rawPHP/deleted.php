<?php
 $inputFile = "deleted.text"; 
 if(file_exists($inputFile))
 {
    unlink($inputFile); 
    echo "$inputFile : is delete"; 
 }
 else {
    echo "$inputFile : is does not exists"; 
 }
?>