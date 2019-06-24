 <!DOCTYPE html>
  <?php  
  include "function.php"; 
 ?> 
 <html>
     <head>     
         <meta charset="UTF-8">
         <style>
             .phpcontent{
                width: 980px;
                margin: 0 auto; 
             }
             *{
                 margin : 0;
                 padding : 0;
                 outline: 0;
                 
             }
             .clear{
                 overflow: hidden;
             }
             .headerpart {
                    height: 84px;
                    background: #3498FF;
                   

            }
            .headerpart h2 {
                text-align: center;
                padding-top: 16px;
                font-size: 35px;
                color: #ffff;
            }
                .content {
                  border: 9px solid #3498FF;
                  min-height: 500px;
                  margin-top: 10px;
                  padding : 8px;
                  font-family: arial;
          }
          .footer{
               height: 84px;
               background: #3498FF;
          } 
          .footer h2{
                text-align: center;
                padding-top: 16px;
                font-size: 35px;
                color: #ffff;
          }
         </style>
               
     </head> 
     <body>
         <div class="phpcontent clear"> 
            <div class="headerpart clear">
               <h2>Object-Oriented PHP For Beginners</h2>

            </div>
             <div class="content clear"> 
                
                 
                 <form action="" method="post">
                     <table>
                         <tr>
                             <td>Enter The First Number :</td>
                             <td><input type="number" name="name1"</td> 
                         </tr>
                         <tr>
                             <td>Enter The Second Number :</td>
                             <td><input type="number" name="name2"</td> 
                         </tr>
                         <tr>
                             <td></td>
                             <td><input type="submit" name="calculation" value="Calculate"</td> 
                         </tr>      
                     </table>  
                 </form> 
                 
                 <?php 
                    
                  if(isset($_POST['calculation'])){
                      
                      $numone = $_POST['name1'];
                      $numtwo = $_POST['name2'];
    
                  
                  
                  if(empty($numone) or empty($numtwo)){
                      
                      echo "<span style='color: red'>Field Must Not be empty</span>";
             
                  }else{
                      echo "First Number Is : ".$numone." Second Number Is :".$numtwo."<br>";
                  $cal = new Calculation;
                  $cal->add($numone, $numtwo);
                  $cal->sub($numone, $numtwo);
                  $cal->mul($numone, $numtwo);
                  $cal->div($numone, $numtwo);
                      
                  }
                  }
                 ?>
                
                 
             </div> 
             <div class="footer clear">
                 <h2>www.w3points.com</h2>
             </div> 
         </div>
     </body>
 </html>