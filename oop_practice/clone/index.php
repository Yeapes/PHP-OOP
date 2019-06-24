<?php
include "../hf/header.php";
?>      
        <div class="content clear"> 
            <?php  
            spl_autoload_register(function($class_name){
             include  $class_name.".php";
                
                
            });   
            
        $java = new CloneClass();   
        $java->setName("OOP");   
        echo $java->getName();
        echo "<br>";
        $php = clone $java;
        
        $php->setName("Programming");
        
        echo $php->getName();
        echo "<br>";
        echo $java->getName();   
            ?> 
        </div> 
<?php include "../hf/footer.php";  
 
 
