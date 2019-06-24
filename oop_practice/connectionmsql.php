<?php
include "hf/header.php";
?>      
        <div class="content clear"> 
            <?php
            $db = new mysqli("localhost", "root", "", "practice");

            if(mysqli_connect_errno()) {
                echo "Connection  Failed";
                exit();
            } else {
                echo "Connection Succesfull-----Welcome To Php Myadmin";
            }

            $sql = "select * from student";

            $result = $db->query($sql);

            while ($data = $result->fetch_object()) {

                echo "<pre>";
                echo $data->Name."  ";
                echo "</pre>";    
            }
//            $update = "update student SET Name ='Raihan al yeapes' where Roll='283193'";
//            
//            $result = $db->query($update);
            
            $sqll = "select Name,District from student";
            $stmt = $db->prepare($sqll);
            $stmt->execute();
            $stmt->bind_result($Name, $District);
            while($stmt->fetch()){
                echo "$Name<br>";
            }
            
            
            ?>  
             
        </div> 
<?php include "hf/footer.php";  
 
 
