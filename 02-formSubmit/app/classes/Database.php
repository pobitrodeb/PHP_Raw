<?php


namespace App\classes;


class Database
{
    public $user, $hostName, $password, $databaseName, $dbResult;

    public function __construct()
    {

        $this->hostName             = 'localhost';
        $this->password             = '';
        $this->databaseName         = 'formsubmit';
        $this->user                 = 'root';
    }

    public function dbConnect()
    {
       $this->dbResult = mysqli_connect($this->hostName, $this->user, $this->password, $this->databaseName);
       return $this->dbResult;
    }
}