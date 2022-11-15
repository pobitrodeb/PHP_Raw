<?php
  $contnet = "Bangladesh is a smalll country."; 
  echo strtolower($contnet).'<br>'; //lower Case 
  echo strtoupper($contnet).'<br>'; //upper case
  echo lcfirst($contnet).'<br>'; //converts the first character of a string to lowercase
  echo ucfirst($contnet).'<br>'; //converts the first character of a string to uppercase
  echo ucwords($contnet).'<br>'; //converts the first character of each word in a string to uppercase
?>