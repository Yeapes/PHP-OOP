<?php 


?>
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
          .mainleft{
              border-right: 1px dotted #999;
              float: left;
              margin-right: 16px;
              width: 350px;
          }
          .mainright{
              float: right;
              width: 450px;
              
          }
          .insert{
              color: #06960E;
              font-weight: bold;
          }
          .delete{
              font-weight: bold;
              color: #DE5A24;
          }
          .tbl_one{
              width: 100%;
              border: 1px solid #fff;
          }
          .tbl_one td{
              padding: 5px 10px;
              text-align: center;
          }
          table.tbl_one tr:nth-child(2n+1){
              background: #fff;
              height: 30px;    
          }
          table.tbl_one tr:nth-child(2n){
/*              background: #fdf0f1;*/
              height: 30px;   
          }
          input[type ="text"]{
              border: 1px solid #ddd;
              margin-bottom: 5px;
              padding: 5px;
              width: 228px;
              font-size: 16px;
          }
          input[type="submit"]{
              cursor: pointer;
              padding: 5px;
               
          }
         a{ 
            color: #006fff;
            }
          .subject {
            margin-bottom: 10px;
            border-bottom: 4px solid #3498FF;
        }
          .subject p{
             margin: 0;
          }
          
          .footer{
               height: 84px;
               background: #3498FF;
          } 
          .footer h2{
                text-align: center;
                padding-top: 16px;
                font-size: 35px;
                color: #fff;
          }
         </style>
               
     </head> 
     <body>
         <div class="phpcontent clear"> 
            <div class="headerpart clear">
               <h2>Object-Oriented PHP For Beginners</h2>

            </div>
             <div class="content clear">
             <section class="subject">
                 <p>CRUD With PDO-Template & Database Design<span style="float: right;"><a href="index.php" style="color: #3498FF;">Create Student</a> || <a href="techer.php" style="color: #3498FF;">Create Teacher</a> </span></p>
                 
             </section>