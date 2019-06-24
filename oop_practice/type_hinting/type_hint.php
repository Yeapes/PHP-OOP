<?php
include "../hf/header.php";
?>      
        <div class="content clear"> 
            <?php
            spl_autoload_register(function($class_name){ 
                include $class_name.".php"; 
            });
            
            new Java(new Php);
                
            ?> 
        </div> 
<?php include "../hf/footer.php";  
 
 
