<?php

namespace App\classes;
class Product
{
    public $products;
    public $data = [];

    public function getAllProduct()
    {
        $this->products = [
            0 => [
                'id' => 1,
                'category_id' => 1,
                'name' => 'Fashionable T Shirt',
                'price' => '4500',
                'image' => 'p1.jpg',
                'image1' => 'p2.jpg',
                'image2' => 'p3.jpg',
            ],
            1 => [
                'id' => 2,
                'category_id' => 1,
                'name' => 'New Jens Pant',
                'price' => '5500',
                'image' => 'p2.jpg',
                'image1' => 'p4.jpg',
                'image2' => 'p2.jpg',
            ],
            2 => [
                'id' => 3,
                'category_id' => 2,
                'name' => 'New Shari',
                'price' => '7500',
                'image' => 'p3.jpg',
                'image1' => 'p1.jpg',
                'image2' => 'p4.jpg',
            ],
            3 => [
                'id' => 4,
                'category_id' => 3,
                'name' => 'New Mobile',
                'price' => '10500',
                'image' => 'p4.jpg',
                'image1' => 'p2.jpg',
                'image2' => 'p3.jpg',
            ],
            4 => [
                'id' => 5,
                'category_id' => 3,
                'name' => 'New Watch',
                'price' => '6500',
                'image' => 'p2.jpg',
                'image1' => 'p4.jpg',
                'image2' => 'p3.jpg',
            ],
        ];
        return $this->products;
    }

    public function getProductById($id)
    {
        $this->products = $this->getAllProduct();
        foreach ($this->products as $product)
        {
            if ($product['id'] == $id)
            {
                return $product;
            }
        }
    }

    public function getProductByCategoryId($id)
    {
        $this->products = $this->getAllProduct();
        foreach ($this->products as $product)
        {
            if ($product['category_id'] == $id)
            {
                array_push($this->data, $product);
            }
        }
        return $this->data;
    }
}