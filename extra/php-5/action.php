<?php
require_once 'vendor/autoload.php';
use App\classes\HelloWorld;
if(isset($_GET['page']))
{
    if($_GET['page'] == 'home')
    {
        $helloWorld = new HelloWorld();
        $products = $helloWorld->getAllproducts();
        include 'pages/home.php';
    }
}
