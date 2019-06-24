<?php

  
class BBCodeParser {
    
    private $post;
    
    public function __construct($object){
        $this->post= $object;
    }
    public function getContent(){
        
      $post->filter();
      $content = $this->parseBBCode($post->getContent());
        return content;
    }
    private function parseBBCode($content){
        //process code will go here;
        
    }
    
    
    
}
