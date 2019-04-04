<?php
//    $dsn = 'mysql:host=localhost;dbname=final';
//    $username = 'root';
//    $password = 'root';
//
//    try {
//        $db = new PDO($dsn, $username, $password);
//    } catch (PDOException $e) {
//        $error_message = $e->getMessage();
//        include('database_error.php');
//        exit();
//    }
//
//  define('DB_HOST', 'localhost');
//  define('DB_USER', 'root');
//  define('DB_PASSWORD', 'root');
//  define('DB_NAME', 'final');
//?>

<?php
$dsn = 'mysql:host=db735559069.db.1and1.com;dbname=db735559069';
$username = 'dbo735559069';
$password = 'R2$t2f2ri3';

try {
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    include('database_error.php');
    exit();
}

define('DB_HOST', 'db735559069.db.1and1.com');
define('DB_USER', 'dbo735559069');
define('DB_PASSWORD', 'R2$t2f2ri3');
define('DB_NAME', 'db735559069');
?>
