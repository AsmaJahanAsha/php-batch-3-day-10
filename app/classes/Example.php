<?php
namespace App\classes;

class Example
{
    public $name;
    public $email;
    public $mobile;
    public $firstName;
    public $lastName;
    public $x;
    public $y;
    public $z;
    public $data=[];

    public function index()
    {
        $this->data=[10,20,30,"BITM",100.200,true];
        foreach ($this->data as $item)
        {
            echo " ".$item;
        }



//        $this->x=100;
//
//        do{
//            echo "Hello World <br/>";
//            $this->x++;
//        }while($this->x < 110);
//

//
//        $this->x=100;
//        while ($this->x < 110)
//        {
//            echo "Hello World";
//            $this->x++;
//        }


//       for ($this->y =10; $this->y <=15; $this->y++)
//       {
//           echo "Hello World<br/>";
//       }

//       switch ($this->x)
//       {
//           case  10:
//               echo 'Hello world';
//               break;
//           case  20:
//               echo 'Hello Bangladesh';
//               break;
//           case  30:
//               echo 'Hello Dhaka';
//               break;
//           default:
//               echo 'Hello BITM';
//       }







//       if($this->x>20)
//       {
//           echo $this->x;
//       }
//       else
//       {
//           echo 'Hello world';
//       }

//       $this->y= 20;
//       $this->z= 30;

//       echo ($this->x > $this->y) || ($this->y > $this->z);
//       echo '<br/> ... <br/>';
//       echo ($this->x > $this->y) || ($this->y < $this->z);
//       echo '<br/> ... <br/>';
//       echo ($this->x < $this->y) || ($this->y > $this->z);
//       echo '<br/> ... <br/>';
//       echo ($this->x < $this->y) || ($this->y < $this->z);
//       echo '<br/> ... <br/>';



//       echo $this->x + $this->y;
//       echo "<br/>";
//       echo $this->x - $this->y;
//       echo "<br/>";
//       echo $this->x * $this->y;
//       echo "<br/>";
//       echo $this->x / $this->y;
//       echo "<br/>";
//       echo $this->x % $this->y;
    }

}