<?php


namespace App\classes;


class Category
{
    public $categories;

    public function getAllCategory()
    {
        $this->categories = [
            0 => [
                'id' => 1,
                'name' => 'Man Fashion',
            ],
            1 => [
                'id' => 2,
                'name' => 'Woman Fashion',
            ],
            2 => [
                'id' => 3,
                'name' => 'Electronics',
            ]
        ];
        return $this->categories;
    }
}