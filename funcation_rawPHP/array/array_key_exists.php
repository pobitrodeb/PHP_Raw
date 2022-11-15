<?php
   $mobileNumber = 
   [
        '01788212585' => '01788212585', 
        '01888033708' => '01888033708'
   ];
   if(array_key_exists("01788212585", $mobileNumber))
   {
     echo "This Mobile Number already taken"; 
   }
   else {
    echo "Seccessfully send your mobile number";
   }
?>