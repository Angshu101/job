<?php
/*
This file contains database configuration assuming you are running mysql using user "root" and password ""
*/

define('DB_SERVER', 'database-1.cfrqvabfhdst.us-east-2.rds.amazonaws.com');
define('DB_USERNAME', 'webserver');
define('DB_PASSWORD', 'Angshu123');
define('DB_NAME', 'my_awsproj');

// Try connecting to the Database
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//Check the connection
if($conn == false){
    dir('Error: Cannot connect');
}

?>
