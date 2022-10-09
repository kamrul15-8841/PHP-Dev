<?php


namespace App\classes;


class Statement
{
    public $x;
    public $y;
    public $arraydata = [];
    public function statement(){
        echo "<h3>PHP conditional Statement</h3>";
        $this->x = 10;

        if ($this->x > 0){
            echo "Positive Number :".$this->x;
        }
        else{
            echo "negative Number".$this->x;
        }
        echo "<br/>";
        switch ($this->x)
        {
            case 10:
                echo "Answer ".$this->x;
                break;
            case 20:
                echo "this is ".$this->x;
                break;
            default:
                echo "wrong !";
                break;
        }
        //for loop
        echo "<hr/>";
        echo "<h3>PHP Repeated Statement</h3>";
        for ($this->y = 0; $this->y <= 100; $this->y++)
        {
            echo $this->y ." ";
        }
        //while loop
        echo "<hr/>";
        $this->x = 1;
        while ($this->x <= 100)
        {
            echo " ".$this->x;
            $this->x++;
        }
        //do while loop
        echo "<hr/>";
        $this->x = 1;
        do{
            echo " ".$this->x;
            $this->x++;
        }
        while ($this->x <= 100);
        echo "<hr/>";
        //forech loop
        $this->arraydata = [1,2,3,"Kamrul",true,6];
        foreach ($this->arraydata as $value){
            echo " ".$value;
        }
    }
}