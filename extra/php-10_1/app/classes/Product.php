<?php

namespace App\classes;
class Product 
{
    public $products; 
    public function getAllProducts()
    {
        $this->products = [
                0 => [
                    'id' => 1,
                    'name'=> "Fashionable T Shirt 1", 
                    'price'=>'18546500',
                    'image'=>'p1.jpg'  
                ],
               1 =>[
                'id' => 12,
                'name'=> "Fashionable T Shirt 2", 
                'price'=>'1800', 
                'image'=>'p2.jpg'  
               ], 
               2 =>[
                'id' => 3,
                'name'=> "Fashionable T Shirt 3", 
                'price'=>'1800', 
                'image'=>'p3.jpg'  
               ], 
               3 =>[
                'id' => 4,
                'name'=> "Fashionable T Shirt 3", 
                'price'=>'1800', 
                'image'=>'p4.jpg'
               ], 
            ];
         return $this->products;   
    }
    
}