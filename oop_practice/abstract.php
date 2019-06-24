<?php
include "hf/header.php";
?>      
        <div class="content clear"> 
            <?php 
            abstract class Student{
                    public $name;
                    public $age;
                
                    public function details()
                {
                    echo $this->name." Is ".$this->age." Years Old"."<br>";
                } 
                    abstract public function reading();
                
            } 
          //  class Boy extends Student{
                
                    public function describe(){
                   
                    return parent::details()."And I am a Student"."<br>";
               }
                    public function reading() {
                    return "I am like to read story book"."<br>";
                }
                
            }  
                $sone = new Boy();
                $sone->name ="Yeapes";
                $sone->age = 18;
                echo $sone->describe(); 
                echo $sone->reading();

                
            ?>











        </div> 
<?php include "hf/footer.php";  
 
 
