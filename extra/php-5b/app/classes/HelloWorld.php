<?php

namespace App\classes;

class HelloWorld
{
 public $message;
 public $monitors;
 public function __construct()
 {
     $this->message ='Hello World';
     $this->monitor = [];
 }
 public function index(){
     header('Location: action.php?page=home');
 }
 public function allMonitors(){
     $this->monitors = [
         0=>[
             'id'=>'1',
             'name'=>'Acer EB192Q 18.5 Inch HD Backlit LED LCD Monitor',
             'band'=>'Acer',
             'price'=>'8500',
             'description'=>'ACer Description',
             'image'=>'1.jpg',
         ],
         1=>[
             'id'=>'2',
             'name'=>'Xiaomi Redmi 1A 23.8" Monitor',
             'band'=>'Xiaomi',
             'price'=>'21541',
             'description'=>'Xiaomi description',
             'image'=>'2.jpg',
         ],
         2=>[
             'id'=>'3',
             'name'=>'Dell E1920H 18.5 Inch LED Monitor',
             'band'=>'Dell',
             'price'=>'4154',
             'description'=>'Deell description',
             'image'=>'<img src="image/photo.jpg" >',
         ],
//         3=>[
//             'id'=>'',
//             'name'=>'',
//             'band'=>'',
//             'price'=>'',
//             'description'=>'',
//             'image'=>'',
//         ],

     ];
     return $this->monitors;
 }
}