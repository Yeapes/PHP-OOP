<?php
include "../hf/header.php";
 
?>      
        <div class="content clear"> 
          <?php 
          
          spl_autoload_register(function($class_name){
              include "classes/".$class_name.".php";
          });
          
//            This is alternative way to autoload  in php script
//            function __autoload($class_name){ 
//            include "classes/".$class_name.".php";
//                
//           }
            
          
           $j = new Java();
           $p = new PHP();
           $py = new Python();
           $r = new Ruby();
           
          ?>  
        </div> 

<?php include "../hf/footer.php";  
 
 
