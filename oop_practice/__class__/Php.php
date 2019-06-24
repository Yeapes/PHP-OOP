<?php

 
class Php {
    
    public function messageFunction(){ 
        echo "This is base class function and class name ".__CLASS__."<br>";
        echo "This is base class function and class name".get_class($this)."<br>"; 
    }
}
