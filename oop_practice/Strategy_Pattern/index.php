<?php
include "../hf/header.php";
?>      
        <div class="content clear"> 
            <?php
            spl_autoload_register(function($class_name){ 
                include $class_name.".php";
            });  
            
           $uone = new User();
           $msg = $uone->getMsg(); 
           switch ($msg) {
               case 'email': 
                   $objMsg = new SendEmail();
                   break;
               case 'fax':
                   $objMsg = new SendFax();
                   break;
               case 'sms':
                   $objMsg = new SendSms();
                   break;
               default:
                   echo "No Sms Found";
                 break;
           }  
//           $objMsg->notfication();      
            ?>       
        </div> 
<?php include "../hf/footer.php";  
 
 
