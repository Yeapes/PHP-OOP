<?php
 
abstract class Database {
    
    public function connect();
    public function query();
    public function inserId();
    
    
    public function setHost($host){
        //Host code will go here;
    }    
    public function setDB($db)
    {
        //DB code will go here;
    }
    public function setUser($user){
        //set user....
        
    }
    public function setPass($pass){
        //set password here...
    }
}
