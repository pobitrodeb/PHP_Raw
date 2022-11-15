<?php


namespace App\classes;

use App\classes\Database;
use http\Header;

class Home
{

    public function index()
    {

      header('Location:action.php?page=home');
    }
}