<?php

namespace App\classes;

class HelloWorld
{
 public $message;
 public $x;
 public $y;
 public $z;
 public $data;
 public $student;
 public $students;
 public function __construct()
 {
    $this->x='12';
    $this->y='10';
    $this->z='11';
    $this->data=[10,20,30,40,50, 'BITM', 100.20, true];
    $this->message='Hello World';
    $this->students=[
        'name'=>'Mainuddin',
        'email'=>'mainuddin@gmail.com',
        'mobile'=> '01788212585'
    ];
    $this->students=[
        0=>[
            'name' => 'Mamun Sekh',
            'email' => 'mamunia@gmail.com',
            'mobile' => '0154154511412',
        ],
        1=>[
            'name' => 'Polok Manuia',
            'email' => 'polok@gmail.com',
            'mobile' => '01454157445454',
        ],
        2=>[
            'name' => 'Eleon Mask',
            'email' => 'eleomask@gmail.com',
            'mobile' => '01415455454454',
        ],
        3=>[
            'name' => 'Brut lee',
            'email' => 'brust@gmail.com',
            'mobile' => '16542165623264 ',
        ],

        ];
 }
 public function index(){
     echo '<h1> Class Four- Repeted Statment </h1>'. '<br/>';
     echo '<h2> For Loop </h2>'. '<br/>';
     for($this->x=10; $this->x <30; $this->x++){
         echo $this->x. '<br/>';
     }
     echo '<h2> While Loop </h2>'. '<br/>';
     while($this->y < 15){
         echo $this->y.'<br/>';
         $this->y++;

     }
     echo '<h2> Do While Loop </h2>'. '<br/>';
     do{
         echo $this->z;
         $this->z++;
     }while($this->x > 110);
     echo '<h2> Array </h2>'. '<br/>';
        echo $this->data[0];
        echo '<br/>';
        print_r($this->data);
        echo '<br/>';
        foreach($this->data as $item){
            echo $item. '<br/>';
            echo '<br/>';
        }
        print_r($this->student);
        foreach ($this->student as $value){
            echo $value. '<br/>';
        }
        echo '<h2> Multi Daimational Array </h2>'. '<br/>';
        echo $this->students[3]['name'];
     echo '<h2> Multi Daimantion All Deatils  </h2>'. '<br/>';
     foreach ($this->students as $bitm){
         echo $bitm['name'].' '.$bitm['email'].' '.$bitm['mobile']. '<br/>';
     }
     echo '<h2> When unkonwn arry index number , see all deatiles  </h2>'. '<br/>';
     foreach ($this->students as $bitm){
         foreach ($bitm as $value)
         {
             echo $value. '<br/>';
         }
     }

 }

}