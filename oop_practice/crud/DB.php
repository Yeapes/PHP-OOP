<?php
include "config.php"; 
class DB { 
    private static $pdo; 
    public static function connection() {

        if (!isset(self::$pdo)) {
            //$dsn = "mysql:host=localhost; dbname=student;";
            //$user = "root";
            //$pass = "";
            try {
                self::$pdo = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME, DB_USER, DB_PASS);
            } catch (PDOException $ex) {
                echo $ex->getMessage();
            }
        }
        return self::$pdo;
    }
    public static function prepare($sql){
        return self::connection()->prepare($sql);
        
    }
    
    
    

}
