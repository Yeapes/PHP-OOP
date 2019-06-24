<?php
include "hf/header.php";
?>      
        <div class="content clear"> 
            <?php
            
            $arr = array("Yeapes","Raihan","Raisul","Rafi");
                
            $iterator = new ArrayObject($arr);
            
            $it = $iterator->getIterator();
         
            while($it->valid()){
                echo $it->current()."<br>";
                $it->next();     
            } 
            ?>
  
        </div> 
<?php include "hf/footer.php";  
 
 
