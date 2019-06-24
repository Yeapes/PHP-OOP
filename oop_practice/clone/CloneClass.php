<?php

 
class CloneClass {
     
    private $name;
    private $framework;
    
    
    public function setName($name){
        
        $this->name = $name;
    }
    public function getName(){
        
        return $this->name;
        
    }
    public function setFramework($framework){
        
        $this->framework = $framework;
    }
    public function getFramework(){
        return $this->framework;
    }
    
    
    
    
}
