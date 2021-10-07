<?php
    
    // Allow the config 
    if ( !defined( '__CONFIG__' ) ) {
        exit( 'Need a config file' );
    }
    
class DB 
{
        protected static $conn;

        private function __construct()
        {

            try {

                self::$conn = new PDO( 'mysql:host=localhost;dbname=toDoapp', 'root', '' );
                self::$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
                self::$conn->setAttribute( PDO::ATTR_PERSISTENT, false );
                
            } 
            catch ( PDOException $e ) {

                echo "Could not connect to database"; 
                exit;
                
            } 
            
        }

        public static function getConnection() {

            if (!self::$conn) {
                new DB();
            }
            return self::$conn;
            
        }
}