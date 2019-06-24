<?php
include "hf/header.php";
?>      
        <div class="content clear"> 
            <?php 
             
            $dsn = "mysql:dbname =userdata;host =localhost;";
            $username = "root";
            $pass = "";
            
            try{
                $pdo = new PDO($dsn,$username,$pass);
                echo "Connection Succesfull";
            } catch (Exception $e)
            {
                echo "Connection Failed....".$e->getMessage();
            }
            
            $value = 1;
            
            $sql = "select * from tbl_user where id=:id";
            
            $stmt = $pdo->prepare($sql);
            $stmt->execute(array(':id' =>$value));
            while ($data = $stmt->fetch()){
                echo "Name :".$data['name']."<br>";
                echo "Name :".$data['skill']."<br>";
            }
            
            
            ?>       
        </div> 
<?php include "hf/footer.php";  
 
 
