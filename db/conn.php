
<?php 
  
  
  
 // In development connection below
    $host = 'localhost';
    $db = 'blog_db';
    $user = 'root';
    $pass = '';
    $charset = 'ut8mb4';

//    //remote database connection
//     $host = 'sql5.freemysqlhosting.net';
//     $db = 'sql5529256';
//     $user = 'sql5529256';
//     $pass = 'tQmYqYpycV';
//     $charset = 'ut8mb4';

    $dsn = "mysql:host=$host;dbname=$db;$charset";

    try{
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ERRMODE_EXCEPTION, PDO::ERRMODE_EXCEPTION);

       // echo 'Hello Database';
    } catch(PDOException $e){
        // echo "<h1 class='text-danger'>No Database Found</h1>";
        throw new PDOException($e->getMessage());

    }

    require_once 'crud.php';
    require_once 'user.php';
    $crud = new crud($pdo);
    $user = new user($pdo);

   $user->insertUser("admin","password");

    ?>