<?php
include "../hf/header.php";
?>      
        <div class="content clear"> 
            <?php
          spl_autoload_register(function($class_name){ 
           include $class_name.".php";  
          });
            
           $obj = new Observable();
           $sk = new Skype();
           $gt = new Gtalk();
           $s = new stdClass();
           
           $obj->register($sk);
           $obj->register($gt);
           $obj->stateChange();
           
                   
            
            ?>
             
        </div> 
<?php include "../hf/footer.php";  
 
 
