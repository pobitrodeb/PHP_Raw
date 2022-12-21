<?php

namespace App\classes;

class HelloWorld
{
 public $message;
 public function __construct()
 {
     $this->message ='Hello World';
 }
 public function index(){
    header('Location:action.php?page=home');
 }
}