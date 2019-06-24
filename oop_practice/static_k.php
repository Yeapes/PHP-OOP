<?php
include "header.php";
?>      
        <div class="content clear"> 
            <?php
            
             
            
            class StaticPractice{
                
                public static $name = "Yeapes";
                public static $age  = 18;
                
                public static function Stest() {
                    
                    echo "Name Is : ".self::$name."<br>";
                    echo "Age  Is :".self::$age;
                    
                }  
            }
            StaticPractice::Stest();
            
                
                
            ?>











        </div> 
<?php include "footer.php";  
 
 
