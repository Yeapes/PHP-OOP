<?php
include "../hf/header.php";
?>      
        <div class="content clear"> 
            <?php
             
           $db = new Database();
           $db->driver("mysql"); 
           $db->connect();
            ?>  
             
        </div> 
<?php include "../hf/footer.php";  
 
 
