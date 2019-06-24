<?php
include "header.php";
?>      
        <div class="content clear"> 
            <?php
             
            interface School{
                
              public function mySchool();
            
            }
            interface College{
                
              public function myCollege();
            
            }
            interface Varsity{
                
              public function myVarsity();
            
            }
            
            class Teacher implements School, College, Varsity{
                
                public function __construct() {
                    $this->mySchool();
                    $this->myCollege();
                    $this->myVarsity();
                }
                
                public function mySchool() {
                     echo "I am a School Teacher"."<br>" ;
                }
                
                public function myCollege(){
                    
                    echo "I am a College Teacher"."<br>";
                }
                public function myVarsity(){
                    
                    echo "I am a university Teacher"."<br>";
                }
            
                
            }
            $ob = new Teacher();
            
            
                
                
            ?>

        </div> 
<?php include "footer.php";  
 
 
