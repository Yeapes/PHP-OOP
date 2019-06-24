<?php
include "hf/header.php";
?>      
        <div class="content clear"> 
            <?php  
              
            $dsn = "mysql:dbname=db_sample;host=localhost";
            $user = "root";
            $pass = "";
            
            try{
                $pdo = new PDO($dsn,$user,$pass);
                echo "Connection Succesfull";
            }catch(PDOException $e){
                echo "Connection Failed".$e->getMessage();
            }
            
            $id =1;
            $name = "Raihan";
            
            //$sql = "update student set name=:name where id=:id";
            $sql = "delete from student where id=:id";
            $stmt = $pdo->prepare($sql);
            
            $stmt->bindParam(':id', $id);
      
            $stmt->execute();
            
            
            
            ?>  
          
        </div> 
<?php include "hf/footer.php";  
 
 
