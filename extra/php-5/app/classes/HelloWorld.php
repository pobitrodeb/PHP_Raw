<?php

namespace App\classes;

class HelloWorld
{
 public $message;
 public $products;
 public function __construct()
 {
     $this->message ='Hello World';
     $this->products =[
       0=>[
           'id'=>'1',
           'name'=>'Sofa',
           'price'=>'18000',
           'catagoray'=>'Furniture',
           'description'=>'Sofa description',
       ],

         1=>[
           'id'=>'2',
           'name'=>'Tulip Chair ',
           'price'=>'2400',
           'catagoray'=>'Chair',
           'description'=>'Tulip Chair ',
       ],
         2=>[
           'id'=>'3',
           'name'=>'Revloving Chair',
           'price'=>'9500',
           'catagoray'=>'Excutive Chair',
           'description'=>'Revolving Chair Descprition',
       ],
         3=>[
           'id'=>'4',
           'name'=>'Gaming Chair',
           'price'=>'18500',
           'catagoray'=>'Gaming Chair',
           'description'=>'Gaming Chair Description',
       ],
         4=>[
           'id'=>'5',
           'name'=>'Dining Table',
           'price'=>'27000',
           'catagoray'=>'Table',
           'description'=>'Dining Table Description',
       ],
         5=>[
           'id'=>'6',
           'name'=>'Computer Desk',
           'price'=>'12500',
           'catagoray'=>'Computer',
           'description'=>'Computer Table',
       ],
     ];
 }
 public function index(){
//     echo $this->message;
//     echo $this->products[0]['name'];
     echo '<pre>';
//     echo print_r($this->products);
     header('Location:action.php?page=home');
 }
 public function getAllproducts(){
     $this->products =[
         0=>[
             'id'=>'1',
             'name'=>'Sofa',
             'price'=>'18000',
             'catagoray'=>'Furniture',
             'description'=>'Sofa description',
             'image'=>'1.jpg',
         ],

         1=>[
             'id'=>'2',
             'name'=>'Tulip Chair ',
             'price'=>'2400',
             'catagoray'=>'Chair',
             'description'=>'Tulip Chair ',
             'image'=>'2.jpg',
         ],
         2=>[
             'id'=>'3',
             'name'=>'Revloving Chair',
             'price'=>'9500',
             'catagoray'=>'Excutive Chair',
             'description'=>'Revolving Chair Descprition',
             'image'=>'3.jpg',
         ],
         3=>[
             'id'=>'4',
             'name'=>'Gaming Chair',
             'price'=>'18500',
             'catagoray'=>'Gaming Chair',
             'description'=>'Gaming Chair Description',
             'image'=>'4.jpg',
         ],
         4=>[
             'id'=>'5',
             'name'=>'Dining Table',
             'price'=>'27000',
             'catagoray'=>'Table',
             'description'=>'Dining Table Description',
             'image'=>'5.jpg',
         ],
         5=>[
             'id'=>'6',
             'name'=>'Computer Desk',
             'price'=>'12500',
             'catagoray'=>'Computer',
             'description'=>'Computer Table',
             'image'=>'6.jpg',
         ],
     ];
     return $this->products;
 }
}