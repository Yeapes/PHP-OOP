<?php
 
class Java {
    
    public $fromphp;
    
    public function __construct(Php $value) {
        $this->fromphp = $value; 
        $this->fromphp->Message();
    }
 
}
