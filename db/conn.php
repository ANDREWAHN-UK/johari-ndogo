<!-- This file is to handle connecting to the databases -->
 <?php
// below for local connection
//$host = '127.0.0.1';
//$db = "edward";
//$user = 'root';
//$pass = '';
//$charset = 'utf8mb4';

//remote database connection:

$host = 'remotemysql.com';
$db = "EfIHr2Rh6H";
$user = 'EfIHr2Rh6H';
$pass = '3RjWvm9pLh';
$charset = 'utf8mb4';



$dsn = "mysql:host = $host; dbname=$db; charset=$charset";

try{
    $pdo = new PDO($dsn, $user, $pass);
   // echo 'Hello Database'; //Only use this line to confirm the database is connected
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//these attributes tell PDO to inform of us error messages
} 
catch(PDOException $e) {
    throw new PDOException($e->getMessage());
}



//after succesfully connecting, then activate crud.php, i.e. create an instance of crud
//the functions we will use are in the crud.php file
require_once 'crud.php';
$crud = new crud($pdo);


//the below allows us to access user functions when and wherever conn is called
require_once 'user.php';
$user = new user($pdo);

$user->insertUser("admin","password");

?>