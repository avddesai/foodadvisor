<?php
define('user1', 'root');
define('PASSWORD', '');
define('HOST', 'localhost');
define('DATABASE', 'joinus');
 
try {
   $connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE, user1, PASSWORD);
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
?>



	