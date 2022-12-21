<?php
require_once 'vendor/autoload.php';
use App\classes\Product;
use App\classes\Category;

$category   = new Category();
$categories = $category->getAllCategory();

//echo '<pre>';
//print_r($_POST);
//echo '</pre>';


if (isset($_GET['page']))
{
    if ($_GET['page'] == 'home')
    {
        $product  = new Product();
        $products = $product->getAllProduct();
        include "pages/home.php";
    }
    elseif ($_GET['page'] == 'about')
    {
        include "pages/about.php";
    }
    elseif ($_GET['page'] == 'category')
    {
        $id         = $_GET['id'];
        $product    = new Product();
        $products   = $product->getProductByCategoryId($id);
        include "pages/category.php";
    }
    elseif ($_GET['page'] == 'detail')
    {
        $id             = $_GET['id'];
        $product        = new Product();
        $singleProduct  = $product->getProductById($id);
        include "pages/detail.php";
    }
    elseif ($_GET['page'] == 'full-name')
    {
        include 'pages/full-name.php';
    }
}
