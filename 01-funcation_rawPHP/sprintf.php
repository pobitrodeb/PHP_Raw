<?php
    $subNumber = 5; 
    $content   = "This semister total book";
    $printhis = "First Semister my total %u book list"; 
    echo sprintf($printhis, $subNumber, $content);
?>