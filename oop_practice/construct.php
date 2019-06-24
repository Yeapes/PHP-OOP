<?php
 
class Student{ 
    public $name; 
    public $age; 
    public $id;
    const NAME = "Md.Raihan Al Yeapes";

    public function __construct($n,$a){
        
        $this->name = $n;
        $this->age = $a;
        
}
     public function studentinfo(){
         echo "Student Name Is : ".$this->name."<br>"."Student age is  : ".$this->age;    
     }  
     
     public function disply(){
         echo "Full Name Is : ".Student::NAME;
     }
     public function setId($id){
         
         $this->id = $id;
         
     }
     public function __destruct(){
         
         if(!empty($this->id)){
             echo "Saving Person";
         }
         
     }
}
   $sone = new Student("Yeapes",18); 
   $sone->studentinfo();
   echo "<br>";
   $sone->disply();
   echo "<br>";
   $sone->setId(20);
   unset($sone);