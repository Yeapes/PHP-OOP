<?php
 
class Observable {
    
    private $observers = array();
    
    public function register($object){
        
        if($object instanceof observer){
            $this->observers = $object;
        }
        else{
            echo "Object should be implements observer interface...";
        }
    }
    public function stateChange(){
        foreach($this->observers as $observer){
            
            $observer->message();
            
        }
        
    }
    
    
    
    
    
    
}
