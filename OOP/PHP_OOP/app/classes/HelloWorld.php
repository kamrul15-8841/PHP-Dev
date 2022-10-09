<?php


namespace App\classes;


class HelloWorld
{
   public $firstName = ' Md. Kamrul ';
   public $laststName = 'Hasan';
    public function NameOfFunction(){
        $this->firstName = 'Kefat';
        $this->laststName = 'Ahmed';
        $name1 = 'kamrul';
        $name2 = 'hasan';
        echo "Hello! ".$this->firstName ." ". $this->laststName; // global variable using $this->name
        echo '<br/>';
        echo "Hello! ".$this->firstName ." " . $this->laststName; // global variable using $this->name
        echo '<br/>';
        echo "Hello! ". $name1 ." ". $name2; // local variable using only $name
        $num1 = 90;
        $num2 = 60;
        $result = $num1+$num2;
        echo '<br/>';
        echo '<hr/>';
        echo $result;
        echo '<hr/>';

    }
}