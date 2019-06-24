<?php
include "../hf/header.php";
?>      
        <div class="content clear"> 
            <?php
            
            
            $post = new Post();
            $comment = new Comment();
            
            $post->filter();
            $comment->filter();
            
            if($BBCodeEnabled == false && $EmoticonEnabled == false) {
                
                $postcontent =$post->getContent();
                $commentcontent = $comment->getContent();
            } elseif($BBCodeEnabled == true && $EmoticonEnabled == false){
                
            }
            
            
            
            
            
            
            
            
            ?>  
             
        </div> 
<?php include "../hf/footer.php";  
 
 
