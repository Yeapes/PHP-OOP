<?php
include "hf/header.php";
?>      
        <div class="content clear"> 
            <?php  
            
            $dsn = "mysql:dbname=userdata;host=localhost;";
            $usr = "root";
            $passw="";
            
            try{
                $pdo = new PDO($dsn,$usr,$passw);
                echo "Connection Succesfull"."<br>";
            } catch (Exception $e) {
                echo "Connection Failed".$e->getMessage();
            } 
            $personId = 4;
            $firstname = "Md Abu ";
            $lastname = "Noman";
            $address = "Kabirhat,Noakhali,Shundolpur";
            $city = "Noakhali"; 
             
            $sql ="insert into persons(PersonId,FirstName,LastName,Address,city) values(:personid,:fname,:lname,:address,:city)";
           
            $stmt = $pdo->prepare($sql); 
            $stmt->bindParam(':personid', $personId,PDO::PARAM_INT);  
            $stmt->bindParam(':fname', $firstname,PDO::PARAM_STR); 
            $stmt->bindParam(':lname', $lastname,PDO::PARAM_STR); 
            $stmt->bindParam(':address', $address,PDO::PARAM_STR);
            $stmt->bindParam(':city', $city,PDO::PARAM_STR);
            $stmt->execute(); 
            
            
            
            ?>  
          
        </div> 
<?php include "hf/footer.php";  
 
 
