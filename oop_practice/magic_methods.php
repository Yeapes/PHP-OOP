<?php
include "hf/header.php";
?>     
/* 
 1.__destruct();
 2.__construct();
 3.__get($property);
 4.__set($property,$value);
 5.__call($method,arg_array);


        <div class="content clear"> 
            <?php  
            class Student {
                
                 public $name;
                
                
               public function __get($pm){
                   echo "$pm Does not exist "."<br>";
               }
                
                public function describe()
                {
                    echo "i am a student"."<br>";
                }
                
              public function __set($pm,$value){
                  echo "We Set $pm->$value"."<br>";
                  
              }
              public function __call($pm, $value) {
                  echo 'there is no '.'$pm'.'method and arguments '.implode(', ,', $value);
              }
                
            } 
            $ob = new Student();
            $ob->describe();
            $ob->Yeapes;
            $ob->age = 18;
            $ob->noExistMethod('2','4');
            ?> 

        </div> 
<?php include "hf/footer.php";  
 
 
