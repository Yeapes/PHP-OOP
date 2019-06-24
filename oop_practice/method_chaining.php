<?php
include "hf/header.php";
?>      
        <div class="content clear"> 
            <?php
            spl_autoload_register(function($class_name){ 
                include $class_name.".php"; 
            });
            
            
            $ob = new Calculation;
            
            echo "Result Is : ".$ob->getValue(10,10)->getResult();
            
                
                
            ?>
 

        </div> 
<?php include "hf/footer.php";  
 
 
