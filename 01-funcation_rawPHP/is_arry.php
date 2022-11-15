<?php 
        $notArray = 'apple'; 
        $yesArray = ['apple', 'manago', 'coconat', 'banana'];
       
        if(is_array($notArray)){
            echo "Opps,". $notArray .'is Arry'; 
        }
        else{
            echo $notArray. ' Not Array';
        }
?> 