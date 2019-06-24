<?php
include "../hf/header.php";
?>      
        <div class="content clear"> 
            <?php
            spl_autoload_register(function($class_name){ 
                include $class_name.".php"; 
            });
            
            $person = new Person;
            foreach ($person as $key=>$value){
                echo "<pre>";
                echo "$key=>$value";
                echo "</pre>";
            }
           $person->iterInner();
            
            ?> 
        </div> 
<?php include "../hf/footer.php";  
 
 
