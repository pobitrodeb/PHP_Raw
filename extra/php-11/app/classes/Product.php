<?php


namespace App\classes;


class Product
{
public  $products;
public  function  getAllProducts(){
    $this->products =[
      0 => [
          'id' => 1,
          'name' => 'Fashionable T -Shirt ',
          'price' => '4511',
          'image' => '1.jpg'
      ] ,
        1 => [
            'id' => 2,
            'name' => 'New Jens Pant ',
            'price' => '5011',
            'image' => '2.jpg',
        ] ,
        2 => [
            'id' => 2,
            'name' => 'Shari',
            'price' => '1011',
            'image' => '3.jpg',
        ],
        3 => [
            'id' => 2,
            'name' => 'New Mobile  ',
            'price' => '7011',
            'image' => '5.jpg',
        ],
        
    ];
    return $this->products;
}
}