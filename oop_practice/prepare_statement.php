<?php
include "hf/header.php";
?>      
        <div class="content clear"> 
            <?php 
            $dsn  = "mysql:dbname=userdata;host=localhost";
            $user = "root";
            $pass = "";
            
            try{
                $pdo = new PDO($dsn,$user,$pass);
                
            } catch (PDOException $ex) {
                
                echo "Connection Failed".$ex->getMessage(); 
            }
           $id = 1; 
           
           $sql  = "select * from tbl_user where id=:id"; 
           $stmt = $pdo->query($sql);
           $stmt->execute(array(':id' => $id));
           
           while ($value = $stmt->fetch()) {
               echo $value['skill']."<br>";
           }
               
            ?>       
        </div> 
<?php include "hf/footer.php";  
 
 
