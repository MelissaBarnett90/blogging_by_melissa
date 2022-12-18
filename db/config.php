<?php
define('dbuser', 'root');
define('dbpass', '');
define('dbname', 'blog_db');
define('dbhost', 'localhost');

$conn = mysqli_connect(dbhost, dbuser, dbpass,dbname);

if (!$conn) {
    die('Could not connect: ' . mysqli_error());
}


?>