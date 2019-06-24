<?php
include "../hf/header.php";
?>      
        <div class="content clear"> 
            <?php
            
            include "Java.php";
            include "Python.php";
            include "Php.php";
            
           $jva =  new yeapes\java\Java();
           $py  =  new yeapes\Python();
           $php =  new yeapes\php\Php();
            
            
            
            
            
            ?>  
             
        </div> 
<?php include "../hf/footer.php";  
 
 
