<?php
require_once ('vendor/autoload.php');
use App\classes\HelloWorld;
if(isset($_GET['page'])){
    if($_GET['page']== 'home' )
    {
        $helloWorld = new HelloWorld();
        $monitors = $helloWorld->allMonitors();
        include 'page/home.php';
    }
}