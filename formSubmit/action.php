<?php
require_once 'vendor/autoload.php';
use App\classes\Home;
use App\classes\Student;

if (isset($_GET['page'])) {
    if ($_GET['page'] == 'home') {

        include 'pages/home.php';
    }
    elseif ($_GET['page']== 'add-student')
    {
        include 'pages/add-student.php';
    }
    elseif ($_GET['page']== 'manage-student')
    {
        include 'pages/manage-student.php';
    }
}
elseif (isset($_POST['submit_btn']))
{
   $student = new Student($_POST);
   $student->newStudent();

}