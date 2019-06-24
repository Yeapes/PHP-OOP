 <!DOCTYPE html>
 
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
                
                 <?php  
                 class UserData{
                     
                     public $user;
                     public $userId; 
                     
                   public function __construct($user,$userId) {
                       $this->user = $user;
                       $this->userId = $userId;
                      echo "User Name is :{$this->user} and UserId is :{$this->userId}";
                   }    
                   
                   public function __destruct() {
                       unset($this->user);
                       unset($this->userId);
                   } 
                 } 
                 $username = "Yeapes";
                 $userid = 10;
                 $usr1 = new UserData($username,$userid); 
                 
                 ?>
                
                 
             </div> 
             <div class="footer clear">
                 <h2>www.w3points.com</h2>
             </div> 
         </div>
     </body>
 </html>