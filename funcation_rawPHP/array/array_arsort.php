<?php 
$fruits = array(
    "math"      =>"144",
    "bangla"   =>"168",
    "english" =>"175", 
    "genaral" =>"50"
    );
    arsort($fruits);
    foreach ($fruits as $key => $val)
    {
    echo  strtoupper("$key = $val\n");
    }
?>