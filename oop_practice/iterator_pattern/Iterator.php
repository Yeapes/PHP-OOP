<?php
 
interface Iterator {
    
    function rewind(); //set index of collection;
    function current(); //Return an object;
    function key(); //Return current key;
    function next(); //if have object,and then return object;
    function valid(); //if have value ,then return object;
}
