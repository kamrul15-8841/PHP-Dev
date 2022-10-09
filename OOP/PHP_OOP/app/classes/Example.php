<?php


namespace App\classes;


class Example
{
    public $name = "Kamrul Hasan";
    public $email = "k@gmail.com";
    public $mobile = 1771883916;

    public function address(){
        echo "kamrul". '<br/>'. $this->name . '<br/>'. $this->email .'<br/>'. $this->mobile ;
        echo '<br/>';
        echo '<hr/>';
        echo gettype($this->name);
        echo '<br/>';
        echo gettype($this->email);
        echo '<br/>';
        echo gettype($this->mobile);
        echo '<hr/>';
    }

}