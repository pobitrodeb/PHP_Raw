<?php

namespace App\classes;

class HelloWorld
{
    public $message;
    public $x;
    public $y;
    public $z;
    public $p;
    public $d;
    public $n;
    public $b;
    public $l;
    public $lc;
    public $statementValue1;
    public $statemnetValue2;
    public $statemnetValue3;

 public function __construct()
 {
     $this->message ='Hello World';
     $this->x = 18;
     $this->y =20;
     $this->p = 25;
     $this->d = 30;
     $this->n = 35;
     $this->b = 45;
     $this->l = 85;
     $this->lc = 65;
     $this->statementValue1 = 100;
     $this->statemnetValue2 = 200;
     $this->statemnetValue3 = 300;

 }
 public function index(){
     // PHP OPARATOR PACTICES
//     >>>>> Arithimateic Oparator
     echo'<h1> Arithimatic Oparator </h1>';
    echo $this->x + $this->y;
    echo '<br/>';
    echo $this->x - $this->y;
     echo '<br/>';
    echo $this->x * $this->y;
     echo '<br/>';
    echo $this->x / $this->y;
     echo '<br/>';
    echo $this->x % $this->y;
     echo '<br/>';
    echo $this->x++;
     echo '<br/>';
     echo $this->x;
     echo '<br/>';
     echo $this->x--;
     echo '<br/>';
     echo $this->x;
     echo '<br/>';
     echo -$this->x;
     echo '<br/>';
     //     >>>>> Assingment Oparator
     echo'<h1>Assingment Oparator </h1>';
     echo $this->p += $this->d;
     echo '<br/>';
     echo $this->p -= $this->d;
     echo '<br/>';
     echo $this->p *= $this->d;
     echo '<br/>';
     echo $this->p /= $this->d;
     echo '<br/>';
     echo $this->p %= $this->d;
     echo '<br/>';
     echo $this->p .= $this->d;
     echo '<br/>';





     //     >>>>>Conditional Oparator
     echo'<h1> Conditional Oparator </h1>';
     echo'<p> Note : Conditional Oparator Result - True or Flase. If your condition true, the resultt print value 1,if your condition flase you can see blank page or Zero(0) </p>';

     echo $this->n > $this->d; // n er theke d boro ki ?
     echo'<br/>';
     echo $this->n < $this->d; // d er theke p boro ki ?
     echo '<br/>';
     echo $this->n >= $this->d; // n er theke d boro ebong soman ki ?
     echo'<br/>';
     echo $this->n <= $this->d; // d er theke p boro ebong soman ki ?
     echo '<br/>';
     // CHECK DATA TYPE
     echo gettype($this->n);

     //     >>>>>Logical Oparator
     echo'<h1> Logical Oparator </h1>';
     echo ($this->l > $this->lc) && ($this->l > $this->lc);
     echo '<br/>';
     echo ($this->l > $this->lc) || ($this->l < $this->lc);
     echo '<br/>';
     echo ($this->l > $this->lc) || ($this->l < $this->lc);

     //     >>>>> STATETMENT
     echo'<h1> PHP Statement </h1>';
     echo '<li> IF  </li>';
     echo '<li> IF ELSE  </li>';
     echo '<li> IF ELSE IF  </li>';
     echo '<li> SWITCH </li>';
    echo '<h3>If-else statement</h3>';
     echo '<br/>';
      if($this->statementValue1 > $this->statemnetValue2){
          echo 'Statemnt Value 1 is getter than by Statment Value 2';
      }
      else{
          echo 'Flase';
      }
     echo '<br/>';
     echo 'Else if  statement';
     echo '<br/>';
     if($this->statementValue1 > $this->statemnetValue2){
            echo 'Frist Result Print';
     }
     else if($this->statementValue1 > $this->statemnetValue3 ){
         echo 'Secound Result Print';
     }
     else if($this->statemnetValue3 < $this->statemnetValue2){
         echo 'Third Result Print';
     }
    else{
        echo 'OOps, sorry Last Reseult ';
    }
     echo '<h3>Switch Case </h3>';
     echo '<br/>';
     switch ($this->statemnetValue2){
         case 50:
             echo 'Your Result 50';
             break;
         case 150:
             echo 'YOur Result is 100';
             break;
         case 200:
             echo 'YOur Result is 200';
             break;
         case 300:
             echo 'YOur Result is 300';
             break;
         default:
             echo 'Your Result Dhaka';
     }
     echo '<br/>';
     echo '<br/>';
     echo '<br/>';
     echo '<br/>';
     echo '<br/>';
     echo '<br/>';
 }
}