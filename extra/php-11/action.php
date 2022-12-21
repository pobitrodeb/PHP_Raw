<?php
require_once 'vendor/autoload.php';
use App\classes\Product;

if(isset($_GET['page']))
{
    if($_GET['page']=='home'){
        $product = new Product();
        $products = $product->getAllProducts();
        include "pages/home.php";

    }
    elseif ($_GET['page']=='about'){
        include "pages/about.php";
    }
    elseif ($_GET['page']=='category'){
        include "pages/category.php";
    }
    elseif ($_GET['page']='detail'){
        include 'pages/detail.php';
    }
}