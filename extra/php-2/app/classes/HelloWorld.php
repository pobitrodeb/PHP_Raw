<?php

namespace App\classes;

class HelloWorld
{
 public $message;
 public $firstName;
 public $lastName;
 public $congratulation;
 public $countSub;
 public $countAdd;
 public function __construct()
 {
     $this->message ='Hello World';
 }
 public function index(){

     $this->firstName = 'bitm';
     $this->firstName = 'Congratulations Your Coding life ';
     echo $this->firstName;
     echo "<br/>";
     $this->lastName ='By BITM';
     echo $this->lastName;
     echo "<br/>";
     $this->congratulation = $this->firstName .''.$this->lastName;
     echo $this->congratulation;
     echo "<br/>";
     $this->countAdd = '40';
     $this->countSub ='10';
//     echo $this->countAdd;
     echo $this->add();
     echo "<br/>";
     echo $this->sub();
     echo "<br/>";
 }
    public function add(){
     return $this->countAdd + $this->countSub;
    }
    public function sub(){
        return $this->countAdd - $this->countSub;
    }
}