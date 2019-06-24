<?php
include "hf/header.php";
?>      
        <div class="content clear"> 
            <?php 
            //Data Source Name;
            $dsn  = "mysql:dbname=userdata;host=localhost";
            $user = "root";
            $pass = ""; 
            try{
               $pdo = new PDO($dsn,$user,$pass);
                
            } catch (PDOException $e) {
               echo "Connection Failed...".$e->getMessage();  
            }
           /*  
                $sql = "select * from tbl_user";
                $result = $pdo->query($sql);

                foreach($result as $value){
                    echo $value['skill']."<br>";
                }
          */
            $name   =  "Rakibul";
            $email  =  "rakib@gmail.com";
            $skill  =  "Civil";
            $age    =  20;
            
            $sql = "insert into tbl_user(name,email,skill,age) values(?,?,?,?)";
            
           $stmt = $pdo->prepare($sql);
           $arr = array($name,$email,$skill,$age);
           $stmt->execute($arr);
           
           
           /*
           $stmt->bindParam(':name', $name,PDO::PARAM_STR);
           $stmt->bindParam(':email',$email,PDO::PARAM_STR);
           $stmt->bindParam(':skill',$skill, PDO::PARAM_STR);
           $stmt->bindParam(':age',  $age, PDO::PARAM_INT); 
           $stmt->execute();
            * 
             */
           
           
           //Not working
           
           
            ?>       
        </div> 
<?php include "hf/footer.php";  
 
 
