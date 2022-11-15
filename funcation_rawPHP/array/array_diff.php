<?php
  $flag = 
  [
    'first'     => 'green', 
    'secound'   => 'red'
    ]; 
  $bambo = 
  [
    'firste'     => 'green', 
    'secounde'   => 'red',
    'thirde'     => 'balck'
   ]; 
  $result = array_diff($flag,$bambo);
  print_r($result);
?>