
<?php
include "../hf/header.php";
?>      
        <div class="content clear"> 
            <?php
            
            trait Java{
                
            public function messageJava(){
                return "I love java"."<br>";
                
            }
            
            }
            trait Php{
                
                public function messagePhp(){
                    
                    return "I love PHP";
                    
                }
 
            }
            
              
            class CoderOne{
                use Java; 
            }
            
            class CoderTwo{
                
                use Php;
            }  
            $c1 = new CoderOne;
           echo $c1->messageJava();
            $c2 = new CoderTwo;
           echo $c2->messagePhp();
                
            ?>











        </div> 
<?php include "../hf/footer.php";  
 
 
