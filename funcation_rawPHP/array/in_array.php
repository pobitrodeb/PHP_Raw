<?php
 $friends = ['Shafikul', 'Diponkar Dipu', 'Arif', 'Sajib', 'Tilok']; 
 $matching = 'Pobitro';
   if(in_array($matching, $friends))
   {
      echo $matching .' Find this';
   }
   else{
      echo $matching .' Not Find this';
   }
?>