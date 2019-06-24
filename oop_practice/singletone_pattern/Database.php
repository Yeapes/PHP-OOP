<?php
 
class Database {
    //Single tone pattern Mechanizm
    
    private static $instance;
    
    public function __construct() {
        
        if(self::$instance){ 
            
            self::$instance = $this;
            echo "Created New One"."<br>";
            return self::$instance;
    }else{
        echo "Old one"."<br>";
        return self::$instance;
        
    }
        
    }
        
}
