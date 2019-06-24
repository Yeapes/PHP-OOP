<?php

 
class Person {
    
    public $name = "Md.Yeapes";
    public $age = "18";
    public $district = "Noakhali";
    private $email = "yeapes2831@gmail.com";
    protected $p_number = "018677340196";
    
    public function iterInner(){
         foreach ($this as $key=>$value){
                echo "Inside Class"."<br>";
                echo "<pre>";
                echo "$key=>$value";
                echo "</pre>";
            }
        
    }
    
    
}
