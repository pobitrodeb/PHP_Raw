<?php


namespace App\classes;

use App\classes\Database;
class Student
{
    public  $name, $email, $mobile, $image, $dataBase, $ql;

    public function __construct($post)
    {
        $this->name         = $post['name'];
        $this->email        = $post['email'];
        $this->mobile       = $post['mobile'];
    }

    public function newStudent()
    {
        $this->sql = "INSERT INTO students(name, email, mobile, image) VALUES ('$this->name ', '$this->email ', '$this->mobile', '154')";
        $this->dataBase = new Database();
        mysqli_query($this->dataBase->dbConnect(), $this->sql);
        echo 'Data Insert Successfully';
    }


}