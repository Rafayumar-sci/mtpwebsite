<?php
class Database {
    private static $connection = null;

    public static function connect() {
        if (self::$connection === null) {
            $host = 'localhost';
            $db_name = 'navttc_db';
            $username = 'root';
            $password = '';

            try {
                self::$connection = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);

                self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(PDOException $e) {
                echo "Connection Error: " . $e->getMessage();
            }
        }
        
        return self::$connection;
    }
}
?>