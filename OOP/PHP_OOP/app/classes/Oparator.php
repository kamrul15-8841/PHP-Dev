<?php


namespace App\classes;


class Oparator
{
    public $x;
    public $y;
    public function operator(){

        $this->x = 10;
        $this->y = 20;

        $sum = $this->x + $this->y;
        $sub = $this->x - $this->y;
        $mul = $this->x * $this->y;
        $div = $this->x / $this->y;
        $rem = $this->x / $this->y;

        echo "<h3>Arithmetic Operator</h3>";
        echo "Sum of two number :". $sum;
        echo "<br/>";
        echo "sub of two number :". $sub;
        echo "<br/>";
        echo "mul of two number :". $mul;
        echo "<br/>";
        echo "div of two number :". $div;
        echo "<br/>";
        echo "rem of two number :". $rem;
        echo "<br/>";

        echo "<h3>Increment Operator</h3>";
        echo $this->x--; //10
        echo", ";
        echo ++$this->x; //10
        echo", ";
        echo $this->x++; //10
        echo", ";
        echo --$this->x; //10
        echo", ";
        echo ++$this->x; //11
        echo"<br/>";

        echo "<h3>Assignment Operator</h3>";
        echo $this->x += $this->y;
        echo "<br/>";
        echo $this->x -= $this->y;
        echo "<br/>";
        echo $this->x *= $this->y;
        echo "<br/>";
        echo $this->x /= $this->y;
        echo "<br/>";
        echo $this->x %= $this->y;

        echo "<h3>Logical Operator</h3>";
        echo  $this->x = 20 == $this->y; //tue
        echo "<br/>";
        echo  $this->x == $this->y; //true
        echo "<br/>";
        echo  $this->x != $this->y; //false
        echo "<hr/>";

    }
}