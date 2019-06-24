<?php
include "../hf/header.php";
?>      
        <div class="content clear"> 
            <?php
            spl_autoload_register(function($class_name){
              include $class_name.".php";   
            }); 
            $pro = new programming(); 
            $sr = serialize($pro); 
            
            $gecont = file_get_contents("programming.txt");
            $unsr = unserialize($gecont);
            
            print "<pre>";
            print_r($unsr);
            print "</pre>";
           
            
            
            
            /*
            file_put_contents("programming.txt", $sr);   
            print "<pre>";
            print_r($sr);
            print "/<pre>";  
             * 
             */   
            ?>  
             
        </div> 
<?php include "../hf/footer.php";  
 
 
