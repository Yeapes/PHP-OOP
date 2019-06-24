<?php
include "../hf/header.php";
include "student.php";
?>      
        <div class="content clear"> 
            <?php 
            if(class_exists("Students")){
                echo "Class Founded"."<br>";
                  $ob = new Student();
                  $ob->describe();
            }else{
                echo "Class is Not found"."<br>";
            } 
//            if(method_exists($ob,"describ")){
//                echo "Method Is founded";
//            }else{
//                echo "<span style='color:red'>Method is not founded</span>";
//            }               
            ?>  
        </div> 
<?php include "hf/footer.php";  
  