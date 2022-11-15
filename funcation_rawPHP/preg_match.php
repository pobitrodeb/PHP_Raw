<?php
    $content = "I love PHP"; 
    $match  = "/love/"; 
    echo preg_match($match, $content);

    // ######### logial condintio apply ####### 

    if(preg_match('/php/', $content)){
        echo 'php matching'; 
    }
    else {
        echo 'php not match';
    }
?>