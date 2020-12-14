  
<?php

class Connection
{
    public static function getDb()
    {
        $conn = new PDO(
            "mysql:host=localhost;dbname=tecfouryou;charset=utf8",
            "root",
            ""
        );

        if ($conn) {
             return $conn;
        
        } else {
            echo "<h1>error, no connection</h1>";
        }
    }
}