<?php
 
class Emoticon {
      private $post;
    
    public function __construct($object){
        $this->post= $object;
    }
    public function getContent(){
        
      $post->filter();
      $content = $this->parseEmoticon($post->getContent());
        return content;
    }
    private function parseEmoticon($content){
        //process code will go here;
        
    }
}
