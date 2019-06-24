<?php
include "../hf/header.php";
?>      
        <div class="content clear"> 
            <?php
            
            spl_autoload_register(function($class_name){ 
                include  $class_name.".php";      
            }); 
            class  childphp extends Php{ 
                public function childClassMessage(){ 
                    echo "This is child class and class name ".__CLASS__."<br>";
                    echo "This is child class and class name ".get_class($this)."<br>";           
                }   
            } 
            $c = new childphp(); 
            $c->messageFunction();
            echo "<hr>";
            $c->childClassMessage();        
            ?> 
        </div> 
<?php include "../hf/footer.php";  
 
 
