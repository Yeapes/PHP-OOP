<?php
include "../hf/header.php";
?>      
        <div class="content clear"> 
            <?php
            
            $db = new mysqli("localhost","root","","test");
            
            if(mysqli_connect_errno()){
                
                echo "Connection Failed";      
            }else {
                echo "Connection Succesfull";
            }
            
            $sql = "insert into images(image) values(?)";
            
            $stmt = $db->prepare($sql);
            $stmt->bind_param("b",$image);
            $image = file_get_contents("b.jpg");
            $stmt->send_long_data(0, $image); 
            $stmt->execute();
            
            
          //Not Worked  
            
            ?>
             
        </div> 
<?php include "../hf/footer.php";  
 
 
