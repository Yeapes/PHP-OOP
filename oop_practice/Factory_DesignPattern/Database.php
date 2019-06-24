<?php
 
class Database {
    
    public $driver;
    public $link;
    
    public function setDriver($driver){
        $this->driver = $driver;
        
    }
    
    
    public function connect(){
        
        if($this->driver == "mysql"){ 
           $managemysql = new ManageMysql();
           $managemysql->setHost($host);   
           $managemysql->setDb($db);   
           $managemysql->setUser($user);   
           $managemysql->setPass($pass);
           $this->link = $managemysql->connect();
        }elseif ($this->driver == "sqlite") {
          
            $managesqlite = new ManageSqlite();
            $managesqlite->setHost($host);
            $managesqlite->setDb($db);
            $managesqlite->setUser($user);
            $managesqlite->setPass($pass);
            $this->link = $managesqlite->connect();
        }
         
    }
    
    
}
