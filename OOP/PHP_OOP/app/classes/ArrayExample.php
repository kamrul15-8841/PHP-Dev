<?php


namespace App\classes;


class ArrayExample
{
    public $student = [];
    public $student1 = [];
    public $student2 = [];
    public $student3 = [];

    public function arrayExample(){
        //simple array
        echo "<h2/>Simple array example<h2/>";
        $this->student = ['Kamrul','171-15-8841',1771883916,false,true];
        echo $this->student[0];
        echo " ".$this->student[1];
        echo " ".$this->student[2];
        echo "<hr/>";
        //array as index with foerech
        echo "<h2/>array example with foreche with index<h2/>";
        foreach ($this->student as $role=>$item){
            echo " ".$role.". ". $item. "<br/>";
        }
        echo "<hr/>";
        foreach ($this->student as $index=>$item){
            echo "Index No = ".$index." "."Value = ". $item. "<br/>";
        }
        echo "<hr/>";
        //Array as name value pare
        echo "<h2/>Array as name value pare<h2/>";
        $this->student1 = [
            'name'=>'Kamrul',
            'email'=>'k@gmail.com',
            'mobile'=>'01771883916'
            ];

        echo $this->student1['name'];
        echo "<br/>".$this->student1['email'];
        echo "<br/>". $this->student1['mobile'];
        echo "<br/>";
        echo "<br/>";
        foreach ($this->student1 as $index=>$item){
            echo $index.": ". $item ."<br/>";
        }
        //Multi Dimensional array
        $this->student2 = [
            0=> [
                'name'=>'Kamrul',
                'email'=>'k@gmail.com',
                'mobile'=>'01771883916'
                ],
            1=> [
                'name'=>'Hasan',
                'email'=>'h@gmail.com',
                'mobile'=>'01571182216'
                ],
            2=> [
                'name'=>'Kawsar',
                'email'=>'a@gmail.com',
                'mobile'=>'01689190484'
                ]
          ];
        echo "<hr/>";
        echo $this->student2[0]['name'];
        echo "<br/>".$this->student2[0]['email'];
        echo "<br/>".$this->student2[0]['mobile'];
        echo "<br/>";
        echo "<br/>".$this->student2[1]['name'];
        echo "<br/>".$this->student2[1]['email'];
        echo "<br/>".$this->student2[1]['mobile'];
        echo "<br/>";
        echo "<br/>".$this->student2[2]['name'];
        echo "<br/>".$this->student2[2]['email'];
        echo "<br/>".$this->student2[2]['mobile'];

        echo "<hr/>";
        foreach ($this->student2 as $key => $item){
            echo $key.".". $item['name']."<br/>";
            echo $key.".". $item['email']."<br/>";
            echo $key.".". $item['mobile']."<br/>";
        }

        echo "<hr/>";
        foreach ($this->student2 as $key => $item){
            echo $item['name']." ". $item['email']." ". $item['mobile']."<br/>";
        }

        echo "<hr/>";
        foreach ($this->student2 as $key => $item){
            if ($key==0){
                echo $item['name']." ". $item['email']." ". $item['mobile']."<br/>";
                break;
            }
        }
        echo "<hr/>";
        foreach ($this->student2 as $item){
            foreach ($item as $value){
                echo $value . " ";
            }
            echo "<br/>";
        }

        //Multi Dimensional array
        $this->student3 = [
            0=> [
                'name'=>'Kamrul',
                'email'=>'k@gmail.com',
                'mobile'=>'01771883916'
            ],
            1=> [
                'name'=>'Hasan',
                'email'=>'h@gmail.com',
                'mobile'=>'01571182216'
            ],
            2=>'Kamrul',
            3=> [
                'name'=>'Kawsar',
                'email'=>'a@gmail.com',
                'mobile'=>'01689190484'
            ]

        ];
        echo "<hr/>";
        foreach ($this->student3 as $item){
            if (is_array($item)){
                foreach ($item as $value){
                    echo $value . " ";
                }
            }
           else{
               echo $item;
           }
            echo "<br/>";
        }

        $this->student3 = [
            0=> [
                'name'=>'Kamrul',
                'email'=>'k@gmail.com',
                'mobile'=>[
                    'mobile1'=>'01771883916',
                    'mobile2'=>'02356883226'
                ]
            ],
            1=> [
                'name'=>'Hasan',
                'email'=>'h@gmail.com',
                'mobile'=>[
                    'mobile1'=>'01571182216',
                    'mobile2'=>'09652182216'
                ]
            ],
            2=>'Kamrul',
            3=> [
                'name'=>'Kawsar',
                'email'=>'a@gmail.com',
                'mobile'=>[
                    'mobile1'=>'01274544216',
                    'mobile2'=>'04787451816'
                ]
            ]

        ];

        echo "<hr/>";
        foreach ($this->student3 as $item){
            if (is_array($item)){
                foreach ($item as $value){
                    if (is_array($value)){
                        foreach ($value as $v_value){
                            echo $v_value. " ";
                        }
                    }
                    else{
                        echo $value . " ";
                    }

                }
            }
            else{
                echo $item;
            }
            echo "<br/>";
        }
        echo "<hr/>";
        echo "<pre/>";
        print_r($this->student3);
        echo "<hr/>";
        echo "<pre/>";
        var_dump($this->student3);

    }
}